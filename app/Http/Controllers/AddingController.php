<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Item;

class AddingController extends Controller
{
    public function addpasta()
    {

        $obj = json_decode(file_get_contents(public_path() . "/pasta.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }

    public function addchicken()
    {

        $obj = json_decode(file_get_contents(public_path() . "/chicken .json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }

    public function addfish()
    {

        $obj = json_decode(file_get_contents(public_path() . "/fish.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }


    public function addpotato()
    {

        $obj = json_decode(file_get_contents(public_path() . "/potato.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }

    public function addporkmeat()
    {

        $obj = json_decode(file_get_contents(public_path() . "/porkmeat.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }

    public function addrice()
    {

        $obj = json_decode(file_get_contents(public_path() . "/rice.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }




    public function addwheat()
    {

        $obj = json_decode(file_get_contents(public_path() . "/wheat.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }

    public function addsoy()
    {

        $obj = json_decode(file_get_contents(public_path() . "/soy.json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }



    public function addbeans()
    {

        $obj = json_decode(file_get_contents(public_path() . "/beans .json"), true);

        foreach ($obj['hints'] as $hint) {
            $foodlabel = $hint['food']['label'];
            $kal       = $hint['food']['nutrients']['ENERC_KCAL'];
            $procount  = $hint['food']['nutrients']['PROCNT'];
            $fat       = $hint['food']['nutrients']['FAT'];
            $carbs     = $hint['food']['nutrients']['CHOCDF'];
            $fiber     = $hint['food']['nutrients']['FIBTG'];
            $img       = $hint['food']['image'];
            //$price     = $hint['measures']['weight'];

            foreach ($hint['measures'] as $m) {
                $price = $m['weight'];
            }


            $item = new Item();
            $item->name = $foodlabel;
            $item->kal = $kal;
            $item->carbs = $carbs;
            $item->fat = $fat;
            $item->procount = $procount;
            $item->fiber = $fiber;
            $item->image = $img;
            $item->price = $price;

            $item->save();
        }

        return back();
    }
}
