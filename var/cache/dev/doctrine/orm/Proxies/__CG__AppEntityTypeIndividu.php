<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class TypeIndividu extends \App\Entity\TypeIndividu implements \Doctrine\ORM\Proxy\InternalProxy
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
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'individus' => [parent::class, 'individus', null],
        "\0".parent::class."\0".'libelle' => [parent::class, 'libelle', null],
        'code' => [parent::class, 'code', null],
        'id' => [parent::class, 'id', null],
        'individus' => [parent::class, 'individus', null],
        'libelle' => [parent::class, 'libelle', null],
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
