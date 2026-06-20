<?php
namespace App\Filters;

use CodeIgniter\Filters\FilterInterface;
use CodeIgniter\HTTP\RequestInterface;
use CodeIgniter\HTTP\ResponseInterface;

class AuthFilter implements FilterInterface
{
    public function before(RequestInterface $request, $arguments = null)
    {
        if ($request->getMethod() === 'options') return;

        $token = $request->getServer('HTTP_AUTHORIZATION') ?? $request->getHeaderLine('Authorization');
        
        if ($token !== 'Bearer secret-token-123') {
            return service('response')->setStatusCode(401)->setJSON(['error' => 'Unauthorized']);
        }
    }
    public function after(RequestInterface $request, ResponseInterface $response, $arguments = null) {}
}