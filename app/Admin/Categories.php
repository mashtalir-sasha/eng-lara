<?php

use App\Categories;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Categories::class, function (ModelConfiguration $model) {

    $model->setTitle('Каталог (по категориям)');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Заголовок'),
            AdminColumn::image('img')->setLabel('Картинка'),
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
                AdminFormElement::text('title', 'Заголовок')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('titleUK', 'Заголовок')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs,
                        AdminFormElement::text('link', 'Ссылка на каталог'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('img', 'Картинка')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Categories::class, 2)
    ->setIcon('fa fa-truck');