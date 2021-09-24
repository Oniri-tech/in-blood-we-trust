<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210923133938 extends AbstractMigration
{
    public function getDescription(): string
    {
        return '';
    }

    public function up(Schema $schema): void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->addSql('CREATE TABLE families (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, description VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_characters (id INT AUTO_INCREMENT NOT NULL, family_id INT DEFAULT NULL, player_id INT DEFAULT NULL, game_table_id INT NOT NULL, name VARCHAR(100) NOT NULL, description VARCHAR(255) NOT NULL, experience INT NOT NULL, npc TINYINT(1) NOT NULL, wound INT NOT NULL, strengh INT NOT NULL, fight INT NOT NULL, handiwork INT NOT NULL, sport INT NOT NULL, dexterity INT NOT NULL, guns INT NOT NULL, throwable INT NOT NULL, furtivity INT NOT NULL, piloting INT NOT NULL, stress INT NOT NULL, manipulation INT NOT NULL, corruption INT NOT NULL, games INT NOT NULL, subterfuge INT NOT NULL, appearance INT NOT NULL, charisma INT NOT NULL, commanding INT NOT NULL, protocol INT NOT NULL, empathy INT NOT NULL, animals INT NOT NULL, diplomaty INT NOT NULL, psychology INT NOT NULL, trauma INT NOT NULL, perception INT NOT NULL, information INT NOT NULL, investigation INT NOT NULL, vigilance INT NOT NULL, intelligence INT NOT NULL, informatic INT NOT NULL, medicine INT NOT NULL, knowledge INT NOT NULL, ingenuity INT NOT NULL, engineering INT NOT NULL, street INT NOT NULL, survive INT NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', INDEX IDX_D4F586E3C35E566A (family_id), INDEX IDX_D4F586E399E6F5DF (player_id), INDEX IDX_D4F586E347BBD77A (game_table_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE game_tables (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, created_at DATETIME NOT NULL COMMENT \'(DC2Type:datetime_immutable)\', PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('CREATE TABLE table_has_players (id INT AUTO_INCREMENT NOT NULL, player_id INT NOT NULL, game_table_id INT NOT NULL, gm TINYINT(1) NOT NULL, INDEX IDX_72E1D8C099E6F5DF (player_id), INDEX IDX_72E1D8C047BBD77A (game_table_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE `utf8mb4_unicode_ci` ENGINE = InnoDB');
        $this->addSql('ALTER TABLE game_characters ADD CONSTRAINT FK_D4F586E3C35E566A FOREIGN KEY (family_id) REFERENCES families (id)');
        $this->addSql('ALTER TABLE game_characters ADD CONSTRAINT FK_D4F586E399E6F5DF FOREIGN KEY (player_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE game_characters ADD CONSTRAINT FK_D4F586E347BBD77A FOREIGN KEY (game_table_id) REFERENCES game_tables (id)');
        $this->addSql('ALTER TABLE table_has_players ADD CONSTRAINT FK_72E1D8C099E6F5DF FOREIGN KEY (player_id) REFERENCES user (id)');
        $this->addSql('ALTER TABLE table_has_players ADD CONSTRAINT FK_72E1D8C047BBD77A FOREIGN KEY (game_table_id) REFERENCES game_tables (id)');
    }

    public function down(Schema $schema): void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->addSql('ALTER TABLE game_characters DROP FOREIGN KEY FK_D4F586E3C35E566A');
        $this->addSql('ALTER TABLE game_characters DROP FOREIGN KEY FK_D4F586E347BBD77A');
        $this->addSql('ALTER TABLE table_has_players DROP FOREIGN KEY FK_72E1D8C047BBD77A');
        $this->addSql('DROP TABLE families');
        $this->addSql('DROP TABLE game_characters');
        $this->addSql('DROP TABLE game_tables');
        $this->addSql('DROP TABLE table_has_players');
    }
}
