<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20230223085439 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE categorie (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE quizz_history (id INT AUTO_INCREMENT NOT NULL, id_user INT NOT NULL, id_categorie INT NOT NULL, score INT NOT NULL, number_of_questions INT NOT NULL, date_passed VARCHAR(255) NOT NULL, INDEX IDX_4D50AF9F6B3CA4B (id_user), INDEX IDX_4D50AF9FC9486A13 (id_categorie), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE reponse (id INT AUTO_INCREMENT NOT NULL, id_question INT NOT NULL, reponse VARCHAR(255) NOT NULL, reponse_expected TINYINT(1) NOT NULL, INDEX IDX_5FB6DEC7E62CA5DB (id_question), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE quizz_history ADD CONSTRAINT FK_4D50AF9F6B3CA4B FOREIGN KEY (id_user) REFERENCES `user` (id)');
        $this->addSql('ALTER TABLE quizz_history ADD CONSTRAINT FK_4D50AF9FC9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id)');
        $this->addSql('ALTER TABLE reponse ADD CONSTRAINT FK_5FB6DEC7E62CA5DB FOREIGN KEY (id_question) REFERENCES question (id)');
        $this->addSql('ALTER TABLE question ADD id_categorie INT NOT NULL, ADD question VARCHAR(255) NOT NULL, CHANGE id id INT AUTO_INCREMENT NOT NULL, ADD PRIMARY KEY (id)');
        $this->addSql('ALTER TABLE question ADD CONSTRAINT FK_B6F7494EC9486A13 FOREIGN KEY (id_categorie) REFERENCES categorie (id)');
        $this->addSql('CREATE INDEX IDX_B6F7494EC9486A13 ON question (id_categorie)');
        $this->addSql('ALTER TABLE user CHANGE roles roles LONGTEXT NOT NULL COMMENT \'(DC2Type:json)\'');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE question DROP FOREIGN KEY FK_B6F7494EC9486A13');
        $this->addSql('ALTER TABLE quizz_history DROP FOREIGN KEY FK_4D50AF9FC9486A13');
        $this->addSql('DROP TABLE categorie');
        $this->addSql('DROP TABLE quizz_history');
        $this->addSql('DROP TABLE reponse');
        $this->addSql('ALTER TABLE question MODIFY id INT NOT NULL');
        $this->addSql('DROP INDEX IDX_B6F7494EC9486A13 ON question');
        $this->addSql('ALTER TABLE question DROP PRIMARY KEY');
        $this->addSql('ALTER TABLE question DROP id_categorie, DROP question, CHANGE id id INT NOT NULL');
        $this->addSql('ALTER TABLE `user` CHANGE roles roles LONGTEXT CHARACTER SET utf8mb4 NOT NULL COLLATE `utf8mb4_bin`');
    }
}
