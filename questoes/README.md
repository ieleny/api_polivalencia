
#Questão 1

##ER

##DDL

#Questão 2

SELECT * FROM dbo.funcionario AS funcionario
                                            INNER JOIN dbo.funcionario_has_posto_trabalho AS has_posto_trabalho ON funcionario.id_funcionario            =  has_posto_trabalho.funcionario_id_funcionario
                                            INNER JOIN dbo.posto_trabalho                 AS posto_trabalho     ON has_posto_trabalho.posto_trabalho_id_posto_trabalho  =  posto_trabalho.id_posto_trabalho
                                        WHERE   
                                            has_posto_trabalho.data_habilitacao_funcionario_has_posto_trabalho >= DATEADD(month, +1, GETDATE()) AND posto_trabalho.nome_posto_trabalho LIKE '%SÃO PAULO%';




SELECT * FROM dbo.funcionario AS funcionario
                                            INNER JOIN dbo.funcionario_has_posto_trabalho AS has_posto_trabalho ON funcionario.id_funcionario            =  has_posto_trabalho.funcionario_id_funcionario
                                            INNER JOIN dbo.posto_trabalho                 AS posto_trabalho     ON has_posto_trabalho.posto_trabalho_id_posto_trabalho  =  posto_trabalho.id_posto_trabalho
                                        WHERE   
                                            has_posto_trabalho.data_habilitacao_funcionario_has_posto_trabalho >= DATEADD(month, +1, GETDATE()) AND posto_trabalho.nome_posto_trabalho LIKE '%SÃO PAULO%';



											SELECT * FROM dbo.posto_trabalho AS posto_trabalho
                                        WHERE   
                                            posto_trabalho.pais_posto_trabalho LIKE '%BRAZIL%';


CREATE DATABASE polivalencia

CREATE TABLE funcionario
(
    id_funcionario INT NOT NULL IDENTITY PRIMARY KEY,
    nome_funcionario VARCHAR(45) NOT NULL,
    data_funcionario DATETIME2 NULL,
    cidade_funcionario VARCHAR(45) NOT NULL,
    telefone_funcionario VARCHAR(14) NOT NULL,
    cpf_funcionario VARCHAR(15) NOT NULL
);

CREATE TABLE tipo_posto
(
    id_tipo_posto INT NOT NULL IDENTITY PRIMARY KEY,
    nome_tipo_posto VARCHAR(45) NOT NULL
);

CREATE TABLE posto_trabalho
(
    id_posto_trabalho INT NOT NULL IDENTITY PRIMARY KEY,
    id_tipo_posto_trabalho INT NOT NULL,
    nome_posto_trabalho VARCHAR(45) NOT NULL,
	pais_posto_trabalho VARCHAR(45) NOT NULL,
    tipo_posto_id_tipo_posto INT NOT NULL
        CONSTRAINT  fk_posto_trabalho_tipo_id_tipo_posto     FOREIGN KEY  (tipo_posto_id_tipo_posto)   REFERENCES  tipo_posto(id_tipo_posto)
);

CREATE TABLE funcionario_has_posto_trabalho
(
    funcionario_id_funcionario INT NOT NULL,
    posto_trabalho_id_posto_trabalho INT NOT NULL,
    data_habilitacao_funcionario_has_posto_trabalho DATETIME2,
    data_validade_funcionario_has_posto_trabalho DATETIME2,
    CONSTRAINT  fk_funcionario_has_posto_trabalho_id_funcionario			  FOREIGN KEY  (funcionario_id_funcionario)         REFERENCES  funcionario(id_funcionario),
    CONSTRAINT  fk_funcionario_has_posto_posto_trabalho_id_posto_trabalho     FOREIGN KEY  (posto_trabalho_id_posto_trabalho)   REFERENCES  posto_trabalho(id_posto_trabalho)
);


<!-- <p align="center"><img src="https://res.cloudinary.com/dtfbvvkyp/image/upload/v1566331377/laravel-logolockup-cmyk-red.svg" width="400"></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Laravel

Laravel is a web application framework with expressive, elegant syntax. We believe development must be an enjoyable and creative experience to be truly fulfilling. Laravel takes the pain out of development by easing common tasks used in many web projects, such as:

- [Simple, fast routing engine](https://laravel.com/docs/routing).
- [Powerful dependency injection container](https://laravel.com/docs/container).
- Multiple back-ends for [session](https://laravel.com/docs/session) and [cache](https://laravel.com/docs/cache) storage.
- Expressive, intuitive [database ORM](https://laravel.com/docs/eloquent).
- Database agnostic [schema migrations](https://laravel.com/docs/migrations).
- [Robust background job processing](https://laravel.com/docs/queues).
- [Real-time event broadcasting](https://laravel.com/docs/broadcasting).

Laravel is accessible, powerful, and provides tools required for large, robust applications.

## Learning Laravel

Laravel has the most extensive and thorough [documentation](https://laravel.com/docs) and video tutorial library of all modern web application frameworks, making it a breeze to get started with the framework.

If you don't feel like reading, [Laracasts](https://laracasts.com) can help. Laracasts contains over 1500 video tutorials on a range of topics including Laravel, modern PHP, unit testing, and JavaScript. Boost your skills by digging into our comprehensive video library.

## Laravel Sponsors

We would like to extend our thanks to the following sponsors for funding Laravel development. If you are interested in becoming a sponsor, please visit the Laravel [Patreon page](https://patreon.com/taylorotwell).

- **[Vehikl](https://vehikl.com/)**
- **[Tighten Co.](https://tighten.co)**
- **[Kirschbaum Development Group](https://kirschbaumdevelopment.com)**
- **[64 Robots](https://64robots.com)**
- **[Cubet Techno Labs](https://cubettech.com)**
- **[Cyber-Duck](https://cyber-duck.co.uk)**
- **[British Software Development](https://www.britishsoftware.co)**
- **[Webdock, Fast VPS Hosting](https://www.webdock.io/en)**
- **[DevSquad](https://devsquad.com)**
- [UserInsights](https://userinsights.com)
- [Fragrantica](https://www.fragrantica.com)
- [SOFTonSOFA](https://softonsofa.com/)
- [User10](https://user10.com)
- [Soumettre.fr](https://soumettre.fr/)
- [CodeBrisk](https://codebrisk.com)
- [1Forge](https://1forge.com)
- [TECPRESSO](https://tecpresso.co.jp/)
- [Runtime Converter](http://runtimeconverter.com/)
- [WebL'Agence](https://weblagence.com/)
- [Invoice Ninja](https://www.invoiceninja.com)
- [iMi digital](https://www.imi-digital.de/)
- [Earthlink](https://www.earthlink.ro/)
- [Steadfast Collective](https://steadfastcollective.com/)
- [We Are The Robots Inc.](https://watr.mx/)
- [Understand.io](https://www.understand.io/)
- [Abdel Elrafa](https://abdelelrafa.com)
- [Hyper Host](https://hyper.host)
- [Appoly](https://www.appoly.co.uk)
- [OP.GG](https://op.gg)

## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT). -->
