<?php
/**
 * Created by PhpStorm.
 * User: rafia
 * Date: 12/6/2014
 * Time: 9:04 PM
 */

namespace TheCheezyMac\Winners;

class WinnersImplementation implements WinnersInterface{

    /**
     * @var Winners
     */
    private $winnersModel;

    public function __construct(Winner $winnersModel)
    {
        $this->winnersModel = $winnersModel;
    }

    public function add(array $inputs)
    {
        $this->winnersModel->fullName = $inputs['fullName'];
        $this->winnersModel->image = $inputs['image'];
        $this->winnersModel->recipeName = $inputs['recipeName'];
        $this->winnersModel->ingredients = $inputs['ingredients'];
        $this->winnersModel->winningDate = $inputs['winningDate'];
        return $this->winnersModel->save();
    }

    public function update(array $inputs, $winnersId)
    {
        $winners = $this->winnersModel->findOrFail($winnersId);
        $winners->fullName = $inputs['fullName'];
        $winners->image = $inputs['image'];
        $winners->recipeName = $inputs['recipeName'];
        $winners->ingredients = $inputs['ingredients'];
        $winners->winningDate = $inputs['winningDate'];
        return $winners->save();
    }

} 