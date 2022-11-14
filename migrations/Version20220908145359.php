<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20220908145359 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE akcije (id INT AUTO_INCREMENT NOT NULL, naziv VARCHAR(255) NOT NULL, datum_pocetka DATE NOT NULL, datum_zavsetka DATE NOT NULL, num_of_days INT NOT NULL, active TINYINT(1) NOT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX dates (datum_pocetka, datum_zavsetka), INDEX endDate (datum_zavsetka), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE basket_products (id INT AUTO_INCREMENT NOT NULL, session_id VARCHAR(255) NOT NULL, product_id INT NOT NULL, product_name VARCHAR(255) NOT NULL, cat_id INT NOT NULL, brand_id INT NOT NULL, seller_id INT NOT NULL, quantity INT NOT NULL, price NUMERIC(12, 4) NOT NULL, member_id INT DEFAULT NULL, created DATETIME NOT NULL, is_active TINYINT(1) NOT NULL, site INT NOT NULL, order_id INT DEFAULT NULL, characteristic LONGTEXT DEFAULT NULL, product_code VARCHAR(100) DEFAULT NULL, INDEX session_id (session_id), INDEX member_id (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE dobavljaci (id INT AUTO_INCREMENT NOT NULL, seller_name VARCHAR(100) DEFAULT NULL, image VARCHAR(100) DEFAULT NULL, date_added DATETIME DEFAULT NULL, active TINYINT(1) DEFAULT NULL, updated DATETIME DEFAULT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE kategorije (id INT AUTO_INCREMENT NOT NULL, parent_category_id INT DEFAULT NULL, category_name VARCHAR(200) NOT NULL, description LONGTEXT DEFAULT NULL, timestamp DATETIME NOT NULL, show_category TINYINT(1) DEFAULT NULL, active TINYINT(1) DEFAULT NULL, meta_title VARCHAR(255) DEFAULT NULL, meta_description LONGTEXT DEFAULT NULL, meta_keywords LONGTEXT DEFAULT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX NewIndex1 (active, show_category), INDEX parent_category_id (parent_category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE korisnici (id INT AUTO_INCREMENT NOT NULL, firma_ili_fizicko_lice INT NOT NULL, naziv_firme VARCHAR(255) DEFAULT NULL, PIB VARCHAR(30) DEFAULT NULL, first_name VARCHAR(255) DEFAULT NULL, last_name VARCHAR(255) DEFAULT NULL, jmbg VARCHAR(13) DEFAULT NULL, address VARCHAR(255) DEFAULT NULL, city VARCHAR(255) DEFAULT NULL, postanski_broj INT DEFAULT NULL, phone VARCHAR(15) DEFAULT NULL, mob_phone VARCHAR(15) DEFAULT NULL, time INT NOT NULL, active TINYINT(1) DEFAULT 0 NOT NULL, first_name_primaoc VARCHAR(255) DEFAULT NULL, last_name_primaoc VARCHAR(255) DEFAULT NULL, address_primaoc VARCHAR(255) DEFAULT NULL, city_primaoc VARCHAR(255) DEFAULT NULL, postanski_broj_primaoc INT DEFAULT NULL, mob_phone_primaoc VARCHAR(15) DEFAULT NULL, send_email TINYINT(1) DEFAULT 0 NOT NULL, is_registred TINYINT(1) DEFAULT 1, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, email VARCHAR(180) NOT NULL, roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\', password VARCHAR(255) NOT NULL, UNIQUE INDEX UNIQ_3DCB2D48E7927C74 (email), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders (id INT AUTO_INCREMENT NOT NULL, member_id INT DEFAULT NULL, order_status INT DEFAULT 1, date_added DATETIME NOT NULL, ime_primaoca VARCHAR(255) NOT NULL, prezime_primaoca VARCHAR(255) NOT NULL, adresa_primaoca VARCHAR(255) NOT NULL, grad_primaoca VARCHAR(255) NOT NULL, telefon_primaoca VARCHAR(20) NOT NULL, firma_primaoca VARCHAR(255) DEFAULT NULL, ptt_primaoca VARCHAR(255) DEFAULT NULL, email_primaoca VARCHAR(255) DEFAULT NULL, datum_narudzbine DATETIME DEFAULT NULL, napomena_admin LONGTEXT DEFAULT NULL, total_price DOUBLE PRECISION NOT NULL, total_price_pdv DOUBLE PRECISION NOT NULL, updated DATETIME DEFAULT NULL, INDEX IDX_E52FFDEE7597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE orders_products (id INT AUTO_INCREMENT NOT NULL, order_id INT NOT NULL, product_id INT NOT NULL, member_id INT DEFAULT NULL, category_id INT DEFAULT NULL, seller_id INT DEFAULT NULL, product_name VARCHAR(255) NOT NULL, quantity INT NOT NULL, price NUMERIC(15, 2) NOT NULL, price_pdv NUMERIC(15, 2) NOT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX IDX_749C879C8D9F6D38 (order_id), INDEX IDX_749C879C4584665A (product_id), INDEX IDX_749C879C7597D3FE (member_id), INDEX IDX_749C879C12469DE2 (category_id), INDEX IDX_749C879C8DE820D9 (seller_id), UNIQUE INDEX UNIQ_749C879C8D9F6D384584665A (order_id, product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodi (id INT AUTO_INCREMENT NOT NULL, fk_akcija_id INT DEFAULT NULL, category_id INT DEFAULT NULL, seller_id INT DEFAULT NULL, product_name VARCHAR(255) NOT NULL, product_name_seo VARCHAR(255) DEFAULT NULL, product_code VARCHAR(100) NOT NULL, brand VARCHAR(255) DEFAULT NULL, caracteristic LONGTEXT DEFAULT NULL, delivery_characteristics LONGTEXT DEFAULT NULL, charasteristics_description LONGTEXT DEFAULT NULL, weight NUMERIC(15, 3) NOT NULL, show_product TINYINT(1) NOT NULL, price_din NUMERIC(15, 2) NOT NULL, price_eur NUMERIC(15, 2) NOT NULL, price_din_vp NUMERIC(15, 2) NOT NULL, price_eur_vp NUMERIC(15, 2) NOT NULL, tax_percentage INT DEFAULT 20 NOT NULL, delivery_price DOUBLE PRECISION DEFAULT NULL, delivery_time INT DEFAULT NULL, fl_out_of_stock TINYINT(1) NOT NULL, fl_new_product TINYINT(1) NOT NULL COMMENT \'0/1 da li je nov proizvod\', fl_discount TINYINT(1) NOT NULL, fl_discount_vp TINYINT(1) NOT NULL, discount_price_din NUMERIC(15, 2) DEFAULT NULL, discount_price_eur NUMERIC(15, 2) DEFAULT NULL, discount_price_din_vp NUMERIC(15, 2) DEFAULT NULL, discount_price_eur_vp NUMERIC(15, 2) DEFAULT NULL, timestamp DATETIME NOT NULL, active TINYINT(1) NOT NULL, meta_title VARCHAR(255) DEFAULT NULL, meta_description LONGTEXT DEFAULT NULL, meta_keywords LONGTEXT DEFAULT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, slika_main VARCHAR(255) DEFAULT NULL, slika1 VARCHAR(255) DEFAULT NULL, slika2 VARCHAR(255) DEFAULT NULL, slika3 VARCHAR(255) DEFAULT NULL, slika4 VARCHAR(255) DEFAULT NULL, slika5 VARCHAR(255) DEFAULT NULL, slika6 VARCHAR(255) DEFAULT NULL, slika7 VARCHAR(255) DEFAULT NULL, slika8 VARCHAR(255) DEFAULT NULL, slika9 VARCHAR(255) DEFAULT NULL, slika10 VARCHAR(255) DEFAULT NULL, slika11 VARCHAR(255) DEFAULT NULL, slika12 VARCHAR(255) DEFAULT NULL, slika13 VARCHAR(255) DEFAULT NULL, slika14 VARCHAR(255) DEFAULT NULL, INDEX IDX_2198DF641D740176 (fk_akcija_id), INDEX IDX_2198DF648DE820D9 (seller_id), INDEX NewIndex1 (active, show_product), INDEX product_name_seo (product_name_seo), INDEX category_id (category_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodi_akcija (id INT AUTO_INCREMENT NOT NULL, fk_proizvod_id INT DEFAULT NULL, fk_akcija_id INT DEFAULT NULL, created DATETIME DEFAULT NULL, INDEX IDX_CBE0C4A4E1D41238 (fk_proizvod_id), INDEX IDX_CBE0C4A41D740176 (fk_akcija_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodi_komentari (id INT AUTO_INCREMENT NOT NULL, id_proizvoda INT NOT NULL, member_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, email VARCHAR(255) DEFAULT NULL, komentar LONGTEXT NOT NULL, vreme INT NOT NULL, active TINYINT(1) DEFAULT 0 NOT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX IDX_EA0081E7AF76EB71 (id_proizvoda), INDEX IDX_EA0081E77597D3FE (member_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodi_slike (id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, name VARCHAR(255) NOT NULL, date_added DATETIME NOT NULL, active TINYINT(1) NOT NULL, image_order INT NOT NULL, INDEX product_id (product_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodi_statistika (statistics_id INT AUTO_INCREMENT NOT NULL, product_id INT DEFAULT NULL, visits_number INT NOT NULL, INDEX IDX_B07E338A4584665A (product_id), PRIMARY KEY(statistics_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE proizvodjaci (id INT AUTO_INCREMENT NOT NULL, brand_name VARCHAR(255) DEFAULT NULL, brand_name_seo VARCHAR(255) DEFAULT NULL, brand_description LONGTEXT DEFAULT NULL, brand_image VARCHAR(255) DEFAULT NULL, date_added DATETIME NOT NULL, show_brand TINYINT(1) NOT NULL COMMENT \'da li se prikazuje na website-u\', active TINYINT(1) DEFAULT NULL, meta_title VARCHAR(255) DEFAULT NULL, meta_description LONGTEXT DEFAULT NULL, meta_keywords LONGTEXT DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX NewIndex1 (active, show_brand), INDEX brand_name_seo (brand_name_seo), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reset_password_request (id INT AUTO_INCREMENT NOT NULL, user_id INT NOT NULL, selector VARCHAR(20) NOT NULL, hashed_token VARCHAR(100) NOT NULL, requested_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', expires_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_7CE748AA76ED395 (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE subscribe (id INT AUTO_INCREMENT NOT NULL, email VARCHAR(255) DEFAULT NULL, status TINYINT(1) DEFAULT 1 NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE website_tags (id INT AUTO_INCREMENT NOT NULL, website INT NOT NULL COMMENT \'1 - odidol, 2 - aim\', web_page VARCHAR(255) NOT NULL, page_title VARCHAR(255) DEFAULT NULL, page_meta_description LONGTEXT DEFAULT NULL, page_meta_keywords LONGTEXT DEFAULT NULL, napomena LONGTEXT DEFAULT NULL, created DATETIME DEFAULT NULL, updated DATETIME DEFAULT NULL, INDEX website (website, web_page), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE kategorije ADD CONSTRAINT FK_5A68AF02796A8F92 FOREIGN KEY (parent_category_id) REFERENCES kategorije (id)');
        $this->addSql('ALTER TABLE orders ADD CONSTRAINT FK_E52FFDEE7597D3FE FOREIGN KEY (member_id) REFERENCES korisnici (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C8D9F6D38 FOREIGN KEY (order_id) REFERENCES orders (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C4584665A FOREIGN KEY (product_id) REFERENCES proizvodi (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C7597D3FE FOREIGN KEY (member_id) REFERENCES korisnici (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C12469DE2 FOREIGN KEY (category_id) REFERENCES kategorije (id)');
        $this->addSql('ALTER TABLE orders_products ADD CONSTRAINT FK_749C879C8DE820D9 FOREIGN KEY (seller_id) REFERENCES dobavljaci (id)');
        $this->addSql('ALTER TABLE proizvodi ADD CONSTRAINT FK_2198DF641D740176 FOREIGN KEY (fk_akcija_id) REFERENCES akcije (id)');
        $this->addSql('ALTER TABLE proizvodi ADD CONSTRAINT FK_2198DF6412469DE2 FOREIGN KEY (category_id) REFERENCES kategorije (id)');
        $this->addSql('ALTER TABLE proizvodi ADD CONSTRAINT FK_2198DF648DE820D9 FOREIGN KEY (seller_id) REFERENCES dobavljaci (id)');
        $this->addSql('ALTER TABLE proizvodi_akcija ADD CONSTRAINT FK_CBE0C4A4E1D41238 FOREIGN KEY (fk_proizvod_id) REFERENCES proizvodi (id)');
        $this->addSql('ALTER TABLE proizvodi_akcija ADD CONSTRAINT FK_CBE0C4A41D740176 FOREIGN KEY (fk_akcija_id) REFERENCES akcije (id)');
        $this->addSql('ALTER TABLE proizvodi_komentari ADD CONSTRAINT FK_EA0081E7AF76EB71 FOREIGN KEY (id_proizvoda) REFERENCES proizvodi (id)');
        $this->addSql('ALTER TABLE proizvodi_komentari ADD CONSTRAINT FK_EA0081E77597D3FE FOREIGN KEY (member_id) REFERENCES korisnici (id)');
        $this->addSql('ALTER TABLE proizvodi_slike ADD CONSTRAINT FK_A6F45E694584665A FOREIGN KEY (product_id) REFERENCES proizvodi (id)');
        $this->addSql('ALTER TABLE proizvodi_statistika ADD CONSTRAINT FK_B07E338A4584665A FOREIGN KEY (product_id) REFERENCES proizvodi (id)');
        $this->addSql('ALTER TABLE reset_password_request ADD CONSTRAINT FK_7CE748AA76ED395 FOREIGN KEY (user_id) REFERENCES korisnici (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE proizvodi DROP FOREIGN KEY FK_2198DF641D740176');
        $this->addSql('ALTER TABLE proizvodi_akcija DROP FOREIGN KEY FK_CBE0C4A41D740176');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C8DE820D9');
        $this->addSql('ALTER TABLE proizvodi DROP FOREIGN KEY FK_2198DF648DE820D9');
        $this->addSql('ALTER TABLE kategorije DROP FOREIGN KEY FK_5A68AF02796A8F92');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C12469DE2');
        $this->addSql('ALTER TABLE proizvodi DROP FOREIGN KEY FK_2198DF6412469DE2');
        $this->addSql('ALTER TABLE orders DROP FOREIGN KEY FK_E52FFDEE7597D3FE');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C7597D3FE');
        $this->addSql('ALTER TABLE proizvodi_komentari DROP FOREIGN KEY FK_EA0081E77597D3FE');
        $this->addSql('ALTER TABLE reset_password_request DROP FOREIGN KEY FK_7CE748AA76ED395');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C8D9F6D38');
        $this->addSql('ALTER TABLE orders_products DROP FOREIGN KEY FK_749C879C4584665A');
        $this->addSql('ALTER TABLE proizvodi_akcija DROP FOREIGN KEY FK_CBE0C4A4E1D41238');
        $this->addSql('ALTER TABLE proizvodi_komentari DROP FOREIGN KEY FK_EA0081E7AF76EB71');
        $this->addSql('ALTER TABLE proizvodi_slike DROP FOREIGN KEY FK_A6F45E694584665A');
        $this->addSql('ALTER TABLE proizvodi_statistika DROP FOREIGN KEY FK_B07E338A4584665A');
        $this->addSql('DROP TABLE akcije');
        $this->addSql('DROP TABLE basket_products');
        $this->addSql('DROP TABLE dobavljaci');
        $this->addSql('DROP TABLE kategorije');
        $this->addSql('DROP TABLE korisnici');
        $this->addSql('DROP TABLE orders');
        $this->addSql('DROP TABLE orders_products');
        $this->addSql('DROP TABLE proizvodi');
        $this->addSql('DROP TABLE proizvodi_akcija');
        $this->addSql('DROP TABLE proizvodi_komentari');
        $this->addSql('DROP TABLE proizvodi_slike');
        $this->addSql('DROP TABLE proizvodi_statistika');
        $this->addSql('DROP TABLE proizvodjaci');
        $this->addSql('DROP TABLE reset_password_request');
        $this->addSql('DROP TABLE subscribe');
        $this->addSql('DROP TABLE website_tags');
    }
}
