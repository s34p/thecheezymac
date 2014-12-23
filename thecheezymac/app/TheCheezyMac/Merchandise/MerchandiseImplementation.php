<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Merchandise;

class MerchandiseImplementation implements MerchandiseInterface{

    /**
     * @var Merchandise
     */
    private $merchandiseModel;

    public function __construct(Merchandise $merchandiseModel)
    {
        $this->merchandiseModel = $merchandiseModel;
    }

    public function add(array $inputs)
    {
        $this->merchandiseModel->item_name = $inputs['item_name'];
        $this->merchandiseModel->image = $inputs['image'];
        $this->merchandiseModel->price = $inputs['price'];
        $this->merchandiseModel->description = $inputs['description'];
        return $this->merchandiseModel->save();
    }

    public function update(array $inputs, $merchandiseId)
    {
        $merchandise = $this->merchandiseModel->findOrFail($merchandiseId);
        $merchandise->item_name = $inputs['item_name'];
        $merchandise->image = $inputs['image'];
        $merchandise->price = $inputs['price'];
        $merchandise->description = $inputs['description'];
        return $merchandise->save();
    }

} 