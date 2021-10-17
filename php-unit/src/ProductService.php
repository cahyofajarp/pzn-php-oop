<?php

namespace FajarTest\Test;

class ProductService
{
    private ProductRepository $repository;

    public function __construct($repository)
    {
        $this->repository = $repository;
    }
    
    public function register(Product $product): Product 
    {
        if($this->repository->findById($product->getId()) != null){
            throw new \Exception("Product is already exist");
        }
        
        return $this->repository->save($product);
    }

    public function delete(string $id): void
    {
        $product = $this->repository->findById($id);

        if($product == null){
            throw new \Exception("Product is null");
        }

        $this->repository->delete($product);
    }
}