<?php

namespace App\Classe;

use App\Entity\Product;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\RequestStack;


class Cart
{
    private $entityManager;
    private $stack;


    public function __construct(EntityManagerInterface $entityManager, RequestStack $stack)
    {
        $this->stack = $stack;
        $this->entityManager = $entityManager;
    }


    public function add($id)
    {

        $session = $this->stack->getSession();
        $cart = $session->get('cart', []);

        if(!empty($cart[$id])){
            $cart[$id]++;
        } else {
            $cart[$id] = 1;
        }


        $session->set('cart', $cart);
    }
    public function get(){
        $methodget = $this->stack->getSession();
        return $methodget->get('cart');
    }

    public function remove(){
        $methodremove = $this->stack->getSession();
        return $methodremove->remove('cart');

    }

    public function delete($id){
        $methoddelete = $this->stack->getSession();
        $cart = $methoddelete->get('cart', []);
        unset($cart[$id]);
        return $methoddelete->set('cart',$cart);

    }

    public function decrease($id)
    {
        $session = $this->stack->getSession();
        $cart = $session->get('cart', []);
        if ($cart[$id] > 1) {
            $cart[$id]--;
            //retirer une quantité
        } else {
            unset($cart[$id]);
        }


        return $session->set('cart',$cart);
        //verifier si la quantité de notre produit = 1
    }

    public function getFull()
    {
        $cartComplete = [];


        if ($this->get()) {
            foreach ($this->get() as $id => $quantity) {
                $product_objet =  $this->entityManager->getRepository(Product::class)->findOneById($id);
                if(!$product_objet){
                    $this->delete($id);
                    continue;
                }
                $cartComplete[] = [
                    'product' => $product_objet,
                    'quantity' => $quantity
                ];
            }
        }
        return $cartComplete;
        // return $session->set('cart',$cart);

    }



}