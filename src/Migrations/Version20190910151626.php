<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20190910151626 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('CREATE TABLE creation_techno (creation_id INT NOT NULL, techno_id INT NOT NULL, INDEX IDX_57D036A934FFA69A (creation_id), INDEX IDX_57D036A951F3C1BC (techno_id), PRIMARY KEY(creation_id, techno_id)) DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci ENGINE = InnoDB');
        $this->addSql('ALTER TABLE creation_techno ADD CONSTRAINT FK_57D036A934FFA69A FOREIGN KEY (creation_id) REFERENCES creation (id) ON DELETE CASCADE');
        $this->addSql('ALTER TABLE creation_techno ADD CONSTRAINT FK_57D036A951F3C1BC FOREIGN KEY (techno_id) REFERENCES techno (id) ON DELETE CASCADE');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('DROP TABLE creation_techno');
    }
}
