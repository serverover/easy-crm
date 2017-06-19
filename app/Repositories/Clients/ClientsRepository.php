<?php
namespace App\Repositories\Clients;

use App\Models\Client;

use App\Models\Industry;
use App\Models\Invoices;
use App\Models\User;
use DB;

/**
  * Class ClientsRepository
  * @package App\Repositories\Clients
 */
class ClientsRepository implements ClientsRepositoryContract
{
    const CREATED = 'created';
    const UPDATED_ASSIGN = 'updated_assign';

    public function all()
    {
        return Client::all();
    }

    public function getPage($page)
    {
        return Client::paginate($page);
    }

    /**
     * @return mixed
     */
    public function listAllIndustries()
    {
        return Industry::pluck('name', 'id');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function find($id)
    {
        return Client::findOrFail($id);
    }

    /**
     * @return mixed
     */
    public function listAllClients()
    {
        return Client::pluck('name', 'id');
    }

    /**
     * @param $id
     * @return mixed
     */
    public function getInvoices($id)
    {
        $invoice = Client::findOrFail($id)->invoices()->with('tasktime')->get();

        return $invoice;
    }

    /**
     * @return int
     */
    public function getAllClientsCount()
    {
        return Client::all()->count();
    }


    /**
     * @param $requestData
     */
    public function create($requestData)
    {
        $requestData['industry'] = Industry::findorFail($requestData['industry_id'])->name;
        $client = Client::create($requestData);
        Session()->flash('flash_message', $client->name.'客户成功添加');
        event(new \App\Events\ClientAction($client, self::CREATED));
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function update($id, $requestData)
    {
        $client = Client::findOrFail($id);
        $client->fill($requestData->all())->save();
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        try {
            $client = Client::findorFail($id);
            $client->delete();
            Session()->flash('flash_message', 'Client successfully deleted');
        } catch (\Illuminate\Database\QueryException $e) {
            Session()->flash('flash_message_warning', 'Client can NOT have, leads, or tasks assigned when deleted');
        }
    }

    /**
     * @param $id
     * @param $requestData
     */
    public function updateAssign($id, $requestData)
    {
        $client = Client::with('user')->findOrFail($id);
        $client->user_id = $requestData->get('user_assigned_id');
        $client->save();

        event(new \App\Events\ClientAction($client, self::UPDATED_ASSIGN));
    }

    /**
     * @param $requestData
     * @return string
     */
    public function vat($requestData)
    {
        $vat = $requestData->input('vat');

        $country = $requestData->input('country');
        $company_name = $requestData->input('company_name');

        // Strip all other characters than numbers
        $vat = preg_replace('/[^0-9]/', '', $vat);

        function cvrApi($vat)
        {
            if (empty($vat)) {
                // Print error message
                return ('请先添加增值税');
            } else {
                // Start cURL
                $ch = curl_init();

                // Set cURL options
                curl_setopt($ch, CURLOPT_URL, 'http://cvrapi.dk/api?search=' . $vat . '&country=dk');
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
                curl_setopt($ch, CURLOPT_USERAGENT, 'Flashpoint');

                // Parse result
                $result = curl_exec($ch);

                // Close connection when done
                curl_close($ch);

                // Return our decoded result
                return json_decode($result, 1);
            }
        }

        $result = cvrApi($vat, 'dk');

        return $result;
    }
}
