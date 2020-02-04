<?php

use App\Brands;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Brands::class, function (ModelConfiguration $model) {

    $model->setTitle('Бренды');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('id')->setLabel('ID'),
            AdminColumn::text('title')->setLabel('Название'),
            AdminColumn::image('img')->setLabel('Лого'),
            AdminColumn::text('created_at')->setLabel('Дата создания'),
            AdminColumn::text('updated_at')->setLabel('Дата изменения'),
        ]);
        return $display;
    });

    $model->onCreateAndEdit(function () {

        $form = AdminForm::panel();
        $form->setHtmlAttribute('enctype', 'multipart/form-data');

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () {
                    return [
                        AdminFormElement::text('title', 'Название')->required(),
                        AdminFormElement::text('link', 'Ссылка на каталог'),
                        AdminFormElement::text('linkCat', 'Ссылка на прайс'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::image('img', 'Лого')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Brands::class, 3)
    ->setIcon('fa fa-file-image-o');