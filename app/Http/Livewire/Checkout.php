<?php

namespace App\Http\Livewire;
use App\Models\Service;
use App\models\Provider;
use App\models\Order;
use App\Models\Order_ditail;
use Livewire\Component;
use Gloudemans\Shoppingcart\Facades\Cart;
use Illuminate\Support\Str;

class Checkout extends Component
{
    
    public $services ,$providers,$provider;
    public array $quantity =[];
    public $successMessage = '';
    public $catchError = '';

    public $Steps = 1, $time, $date ,$city ,$state ,$note ,$paymentMethod ;
    public $category_id;
    
    public function mount($category_id){
        $this->services = Service::with('category:name')->where('category_id',$this->category_id)->get();   

        $this->providers = Provider::with('user') ->get();

        foreach($this->services as $service){
            $this->quantity[$service->id] =1;
        }

        $this->category_id = $category_id;       
    }
    
    public function render()
    { 
        $cart =Cart::content();
        //dd($cart);
        return view('livewire.checkout' ,['cart'=> $cart ])->layout('layouts.service');
    }
    public function addToCart(Service $service){

        //$service = Service::findOrFail($service_id);
     
        Cart::add([
           'id'=> $service->id,
           'name'=> $service->name,
           'qty' => $this->quantity[$service->id],
           'price' => $service->price / 100 ,
           'weight' => 550,
           'options' => ['size' => 'large'],
            
        ]);
        $this->emit('cart_updated');
    }
    public function removeFromCart($id){
        //Cart::remove($id);
        $cart = Cart::content()->where('id',$id);
        Cart::remove($cart->value('rowId'));
        //$cart->value('rowId');
        //$cv=$var->rowId;
        //$var = $cart['rowId'];
        //Cart::remove()->where('id',$id);
        //dd($var);
       // Cart::remove($id);
        //dd($cart);
    //    if($cart->isNotEmpty()){
    //        Cart::remove($cart);
    //    }
       $this->emit('cart_updated');
    }

    public function increment($service_id)
    {
        $this->quantity[$service_id] ++;
         
    }

    public function decrease($service_id)
    {
        $this->quantity[$service_id] --;
    }

    public function fristStepSubmit(){
        $this->Steps= 2;
        
    }
    public function secondStepSubmit(){
        $this->Steps=3;
    }
    public function thridStepSubmit(){
        $this->Steps= 4;
    }
    public function back(){
        $this->Steps --;
    }

    public function createOrder(){

        $address = [$this-> city,$this-> state ];
        $service_schedule = [ $this->date , $this-> time ];
        //dd($address , $service_schedule);
        $notes = $this-> note; 
        $prov =$this->provider;
        $date= $this-> date ;
        $time= $this-> time ;
        $ctiy= $this-> city;
        $state= $this-> state;
        //$cart =Cart::subtotal();
        //$var =0;
        // foreach($cart as $itmes){
        //     $total_cost  = $var +  $itmes->price * $itmes->qty;
        //     $var = $total_cost;

        // }
       
       $order = Order::create([
          'user_id'=>1,
          'category_id'=> $this->category_id,
          'provider_id'=> $this->provider,
          'note'=> $this->note,
          'address'=> implode(' , ',$address ),
          'service_date'=> $this->date, 
          'service_time'=> $this-> time,
          'total_cost'=> Cart::subtotal() ,
        ]);
        $cart = Cart::content();
        foreach($cart as $itmes){
        Order_ditail::create([
            'order_id'=> $order->id,
            'service_id'=> $itmes->id,
            'service_cost'=> $itmes->price,
            'quantity'=> $itmes->qty,
            'total_cost'=> $itmes->price*$itmes->qty,
        ]);
        }
        
    }
    public function time_select(){
        $datea= $this-> date ;
        $times= $this-> time ;
        $ctiys= $this-> city;
        $states= $this-> state;
        $notes= $this-> note; 
        $prov =$this->provider;
        $cart =Cart::content();

        dd($datea,$times,$ctiys,$states,$notes,$prov,$cart);
    
    }

}
