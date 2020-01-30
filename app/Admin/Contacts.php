<?php

use App\Contacts;
use SleepingOwl\Admin\Model\ModelConfiguration;

AdminSection::registerModel(Contacts::class, function (ModelConfiguration $model) {

    $model->disableCreating();
    $model->disableDeleting();

    $model->setTitle('Контакты');
    $model->onDisplay(function () {
        $display = AdminDisplay::table()->setColumns([
            AdminColumn::text('addr')->setLabel('Адрес'),
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
                AdminFormElement::text('addr', 'Адрес')->required(),
                AdminFormElement::text('time', 'Часы работы')->required(),
            ]),
            'Українська' => new \SleepingOwl\Admin\Form\FormElements([
                AdminFormElement::text('addrUK', 'Адреса')->required(),
                AdminFormElement::text('timeUK', 'Години роботи')->required(),
            ]),
        ]);

        $form->addBody([
            AdminFormElement::columns()
                ->addColumn(function () use ($tabs) {
                    return [
                        $tabs,
                        AdminFormElement::text('email', 'E-mail адрес')->required(),
                        AdminFormElement::text('email2', 'E-mail адрес 2'),
                        AdminFormElement::text('facebook', 'Facebook'),
                        AdminFormElement::text('youtube', 'Youtube'),
                        AdminFormElement::textarea('map', 'Код карты Гугл')->required(),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('phone-top', 'Телефон в меню +38 XXX XXX XX XX')->required(),
                        AdminFormElement::text('phone-topviber', 'viber'),
                        AdminFormElement::text('phone-toptele', 'telegram'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('phone1', 'Телефон +38 (XXX) XXX-XX-XX'),
                        AdminFormElement::text('phone1viber', 'viber'),
                        AdminFormElement::text('phone1tele', 'telegram'),
                    ];
                })->addColumn(function () {
                    return [
                        AdminFormElement::text('phone2', 'Телефон +38 (XXX) XXX-XX-XX'),
                        AdminFormElement::text('phone2viber', 'viber'),
                        AdminFormElement::text('phone2tele', 'telegram'),
                    ];
                }),
        ]);
        return $form;
    });
})->addMenuPage(Contacts::class, 6)
    ->setIcon('fa fa-info');