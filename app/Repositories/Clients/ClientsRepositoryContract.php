<?php
namespace App\Repositories\Clients;

interface ClientsRepositoryContract
{
    public function all();

    public function getPage($page);

    public function listAllClients();

    public function getInvoices($id);

    public function getAllClientsCount();

    public function listAllIndustries();

    public function create($requestData);

    public function update($id, $requestData);

    public function destroy($id);

    public function vat($requestData);
}
