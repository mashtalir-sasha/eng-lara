<?php

use App\Parts;
use App\Brands;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Parts::class, function (ModelConfiguration $model) {

    $model->setTitle('Запчасти (по брендам)');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('#'),
            AdminColumn::text('name')->setLabel('Название'),
            AdminColumn::text('numb')->setLabel('Номер'),
            AdminColumn::image('img')->setLabel('Фото'),
            AdminColumn::text('created_at')->setLabel('Дата создания'),
            AdminColumn::text('updated_at')->setLabel('Дата изменения'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $tabs = AdminDisplay::tabbed([
            'Русский' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('name', 'Название запчасти')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('nameUK', 'Назва запчастини')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        AdminFormElement::select('brand_id', 'Выберите бренд')->setModelForOptions(new Brands)->setDisplay('title')->required(),
                        $tabs,
                        AdminFormElement::text('numb', 'Номер запчасти')->required(),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('img', 'Фото запчасти')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Parts::class, 4)
    ->setIcon('fa fa-cogs');