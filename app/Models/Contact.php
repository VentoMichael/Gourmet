<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Contact extends Model
{
    use HasFactory;

    public function editions(){
        return $this->hasOne(Edition::class);
    }
}
//PRATICALINFO

///**
//     * The model the resource corresponds to.
//     *
//     * @var string
//     */
//    public static $model = \App\Models\PraticalInfos::class;
//
//    /**
//     * The single value that should be used to represent the resource when being displayed.
//     *
//     * @var string
//     */
//    public static $title = 'id';
//
//    /**
//     * The columns that should be searched.
//     *
//     * @var array
//     */
//    public static $search = [
//        'id',
//    ];
//    public static $group = "Informations pratiques";
//
//    public static function label()
//    {
//        return 'Informations pratiques';
//    }
//    /**
//     * Get the fields displayed by the resource.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return array
//     */
//    public function fields(Request $request)
//    {
//        return [
//            ID::make(__('ID'), 'id')->sortable(),
//            Date::make('startDate')->pickerFormat('d.m.Y'),
//            Date::make('endDate')->pickerFormat('d.m.Y'),
//            Number::make('Prix du billet', 'priceTicket')->default(255),
//            Text::make('Section des plats', 'place')
//                ->rules('required','max:255'),
//            Text::make('Adresse email', 'email')
//                ->rules('required', 'email', 'max:255')
//                ->creationRules('unique:users,email')
//                ->updateRules('unique:users,email,{{resourceId}}'),
//            Text::make('Site internet', 'website')
//                ->rules('required', 'max:255'),
//            Number::make('Nombre de places', 'stock')
//                ->rules('required'),
//            PhoneNumber::make('Numéro de téléphone', 'phone')
//                ->format('####-###-###')
//                ->country('BE')
//                ->rules('required'),
//        ];
//    }



//CONTACTTTT

///**
//     * The model the resource corresponds to.
//     *
//     * @var string
//     */
//    public static $model = \App\Models\Restaurant::class;
//
//    /**
//     * The single value that should be used to represent the resource when being displayed.
//     *
//     * @var string
//     */
//    public static $title = 'title_dish';
//
//    /**
//     * The columns that should be searched.
//     *
//     * @var array
//     */
//    public static $search = [
//        'title_dish',
//    ];
//    public static $group = "Informations pratiques";
//
//    public static function label()
//    {
//        return 'Restaurant';
//    }
//    /**
//     * Get the fields displayed by the resource.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return array
//     */
//    public function fields(Request $request)
//    {
//        return [
//            ID::make(__('ID'), 'id')->sortable(),
//            Text::make('Section des plats', 'dish_section')
//                ->rules('required','max:255')
//                ->sortable(),
//            Text::make('Nom du plat', 'title_dish')
//                ->rules('required','max:255')
//                ->sortable(),
//            Text::make('Description du plat', 'description_dish')
//                ->rules('required','max:255')
//                ->sortable(),
//            Number::make('Prix du plat', 'price_dish')
//                ->sortable(),
//        ];
//    }


//TAGGGG

///**
//     * The model the resource corresponds to.
//     *
//     * @var string
//     */
//    public static $model = Tag::class;
//
//    /**
//     * The single value that should be used to represent the resource when being displayed.
//     *
//     * @var string
//     */
//    public static $title = 'name';
//
//    public static $group = "Exposants";
//
//    public static $with = ["exposants"];
//
//    /**
//     * The columns that should be searched.
//     *
//     * @var array
//     */
//    public static $search = [
//        'name',
//    ];
//
//    public static function label()
//    {
//        return 'Tags';
//    }
//    /**
//     * Get the fields displayed by the resource.
//     *
//     * @param  \Illuminate\Http\Request  $request
//     * @return array
//     */
//    public function fields(Request $request)
//    {
//        return [
//            ID::make(__('ID'), 'id')->sortable(),
//            TextWithSlug::make('Nom de tag', 'name')
//                ->slug('slug')
//                ->sortable(),
//            Slug::make('Slug', 'slug'),
//            Text::make('Exposant', function () {
//                return $this->exposants->map(function ($exposant) {
//                    return $exposant->shop_name;
//                })->implode(', ');
//            })->asHtml(),
//            BelongsToMany::make('Exposants', 'exposants', Exposant::class)
//        ];
//    }
