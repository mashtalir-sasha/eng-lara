<?php

use App\Mains;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Mains::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Ссылка на каталог (главная)');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('link')->setLabel('Ссылка'),
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
                        AdminFormElement::text('link', 'Ссылка на каталог')->required(),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Mains::class, 1)
    ->setIcon('fa fa-link');