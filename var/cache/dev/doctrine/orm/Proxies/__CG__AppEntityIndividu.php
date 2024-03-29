<?php

namespace Proxies\__CG__\App\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Individu extends \App\Entity\Individu implements \Doctrine\ORM\Proxy\InternalProxy
{
    use \Symfony\Component\VarExporter\LazyGhostTrait {
        initializeLazyObject as __load;
        setLazyObjectAsInitialized as public __setInitialized;
        isLazyObjectInitialized as private;
        createLazyGhost as private;
        resetLazyObject as private;
    }

    private const LAZY_OBJECT_PROPERTY_SCOPES = [
        "\0".parent::class."\0".'adresse' => [parent::class, 'adresse', null],
        "\0".parent::class."\0".'classe' => [parent::class, 'classe', null],
        "\0".parent::class."\0".'evaluations' => [parent::class, 'evaluations', null],
        "\0".parent::class."\0".'id' => [parent::class, 'id', null],
        "\0".parent::class."\0".'ligneEvaluations' => [parent::class, 'ligneEvaluations', null],
        "\0".parent::class."\0".'nom' => [parent::class, 'nom', null],
        "\0".parent::class."\0".'numeroMatricule' => [parent::class, 'numeroMatricule', null],
        "\0".parent::class."\0".'prenom' => [parent::class, 'prenom', null],
        "\0".parent::class."\0".'telephone' => [parent::class, 'telephone', null],
        "\0".parent::class."\0".'typeindividu' => [parent::class, 'typeindividu', null],
        'adresse' => [parent::class, 'adresse', null],
        'classe' => [parent::class, 'classe', null],
        'evaluations' => [parent::class, 'evaluations', null],
        'id' => [parent::class, 'id', null],
        'ligneEvaluations' => [parent::class, 'ligneEvaluations', null],
        'nom' => [parent::class, 'nom', null],
        'numeroMatricule' => [parent::class, 'numeroMatricule', null],
        'prenom' => [parent::class, 'prenom', null],
        'telephone' => [parent::class, 'telephone', null],
        'typeindividu' => [parent::class, 'typeindividu', null],
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
