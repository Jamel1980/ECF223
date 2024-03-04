<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class AnneeScolaire extends \App\Entity\AnneeScolaire implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'code' => [parent::class, 'code', null],
        "\0".parent::class."\0".'dateDebut' => [parent::class, 'dateDebut', null],
        "\0".parent::class."\0".'dateFin' => [parent::class, 'dateFin', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'trimestres' => [parent::class, 'trimestres', null],
        'code' => [parent::class, 'code', null],
        'dateDebut' => [parent::class, 'dateDebut', null],
        'dateFin' => [parent::class, 'dateFin', null],
        'id' => [parent::class, 'id', null],
        'trimestres' => [parent::class, 'trimestres', null],
    ];

    public function __isInitialized(): bool
    {
        return isset($this->lazyObjectState) && $this->isLazyObjectInitialized();
    }

    public function __serialize(): array
    {
        $properties = (array) $this;
        unset($properties["\0" . self::class . "\0lazyObjectState"]);

        return $properties;
    }
}