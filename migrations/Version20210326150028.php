<?php

declare(strict_types=1);

namespace DoctrineMigrations;

use Doctrine\DBAL\Schema\Schema;
use Doctrine\Migrations\AbstractMigration;

/**
 * Auto-generated Migration: Please modify to your needs!
 */
final class Version20210326150028 extends AbstractMigration
{
    public function getDescription() : string
    {
        return '';
    }

    public function up(Schema $schema) : void
    {
        // this up() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event CHANGE categorie_id categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notifiable_notification CHANGE notification_id notification_id INT DEFAULT NULL, CHANGE notifiable_entity_id notifiable_entity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notification CHANGE message message VARCHAR(4000) DEFAULT NULL, CHANGE link link VARCHAR(4000) DEFAULT NULL');
        $this->addSql('ALTER TABLE notifications ADD reservation_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notifications ADD CONSTRAINT FK_6000B0D3B83297E7 FOREIGN KEY (reservation_id) REFERENCES reservation (id)');
        $this->addSql('CREATE INDEX IDX_6000B0D3B83297E7 ON notifications (reservation_id)');
        $this->addSql('ALTER TABLE reservation CHANGE event_id event_id INT DEFAULT NULL');
    }

    public function down(Schema $schema) : void
    {
        // this down() migration is auto-generated, please modify it to your needs
        $this->abortIf($this->connection->getDatabasePlatform()->getName() !== 'mysql', 'Migration can only be executed safely on \'mysql\'.');

        $this->addSql('ALTER TABLE event CHANGE categorie_id categorie_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notifiable_notification CHANGE notification_id notification_id INT DEFAULT NULL, CHANGE notifiable_entity_id notifiable_entity_id INT DEFAULT NULL');
        $this->addSql('ALTER TABLE notification CHANGE message message VARCHAR(4000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci, CHANGE link link VARCHAR(4000) DEFAULT \'NULL\' COLLATE utf8mb4_unicode_ci');
        $this->addSql('ALTER TABLE notifications DROP FOREIGN KEY FK_6000B0D3B83297E7');
        $this->addSql('DROP INDEX IDX_6000B0D3B83297E7 ON notifications');
        $this->addSql('ALTER TABLE notifications DROP reservation_id');
        $this->addSql('ALTER TABLE reservation CHANGE event_id event_id INT DEFAULT NULL');
    }
}
