<?php

namespace App\EventSubscriber;

use App\Entity\Attachment;
use App\Entity\Post;
use App\Entity\User;
use Symfony\Component\EventDispatcher\EventSubscriberInterface;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityUpdatedEvent;
use EasyCorp\Bundle\EasyAdminBundle\Event\BeforeEntityPersistedEvent;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class EventSubscriber implements EventSubscriberInterface
{
    public function __construct(private UserPasswordHasherInterface $passwordHasherInterface) {}

    public function updateUserPassword(BeforeEntityPersistedEvent|BeforeEntityUpdatedEvent $event): void
    {
        $entityInstance = $event->getEntityInstance();

        if ($entityInstance instanceof User && $entityInstance->getPlainPassword()) {
           $entityInstance->setPassword($this->passwordHasherInterface->hashPassword($entityInstance, $entityInstance->getPlainPassword()));
        }
    }

    public static function getSubscribedEvents(): array
    {
        return [
            BeforeEntityPersistedEvent::class => 'updateUserPassword',
            BeforeEntityUpdatedEvent::class => 'updateUserPassword',
        ];
    }
}
