<?php declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20181023162110 extends AbstractMigration
{
    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE accueil (id INT AUTO_INCREMENT NOT NULL, title_presentation LONGTEXT NOT NULL, img_presentation VARCHAR(255) NOT NULL, alt_img_presentation VARCHAR(255) NOT NULL, title_mon_passe VARCHAR(255) NOT NULL, img_mon_passe VARCHAR(255) NOT NULL, alt_img_mon_passe VARCHAR(255) NOT NULL, text_mon_passe LONGTEXT NOT NULL, title_mon_avenir VARCHAR(255) NOT NULL, img_mon_avenir VARCHAR(255) NOT NULL, alt_img_mon_avenir VARCHAR(255) NOT NULL, text_mon_avenir LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE creation (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, title VARCHAR(255) NOT NULL, resumer LONGTEXT NOT NULL, img VARCHAR(255) NOT NULL, alt VARCHAR(255) NOT NULL, link VARCHAR(255) DEFAULT NULL, git VARCHAR(255) DEFAULT NULL, text LONGTEXT NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE crea_to_tech (id INT AUTO_INCREMENT NOT NULL, id_techno_id INT NOT NULL, id_crea_id INT NOT NULL, INDEX IDX_8EB9D6BFD1C67D9B (id_techno_id), INDEX IDX_8EB9D6BFF40DF8C5 (id_crea_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('CREATE TABLE techno (id INT AUTO_INCREMENT NOT NULL, name VARCHAR(255) NOT NULL, level VARCHAR(255) NOT NULL, exemple LONGTEXT DEFAULT NULL, type VARCHAR(255) NOT NULL, img VARCHAR(255) NOT NULL, img_alt VARCHAR(255) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE crea_to_tech ADD CONSTRAINT FK_8EB9D6BFD1C67D9B FOREIGN KEY (id_techno_id) REFERENCES techno (id)');
        $this->addSql('ALTER TABLE crea_to_tech ADD CONSTRAINT FK_8EB9D6BFF40DF8C5 FOREIGN KEY (id_crea_id) REFERENCES creation (id)');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE crea_to_tech DROP FOREIGN KEY FK_8EB9D6BFF40DF8C5');
        $this->addSql('ALTER TABLE crea_to_tech DROP FOREIGN KEY FK_8EB9D6BFD1C67D9B');
        $this->addSql('DROP TABLE accueil');
        $this->addSql('DROP TABLE creation');
        $this->addSql('DROP TABLE crea_to_tech');
        $this->addSql('DROP TABLE techno');
    }
}
