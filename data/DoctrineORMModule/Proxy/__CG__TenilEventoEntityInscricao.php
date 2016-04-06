<?php

namespace DoctrineORMModule\Proxy\__CG__\TenilEvento\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Inscricao extends \TenilEvento\Entity\Inscricao implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = array();



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return array('__isInitialized__', 'id', 'evento', 'boleto', 'nome', 'email', 'cpf', 'dataNascimento', 'foneFixo', 'foneCelular', 'logradouro', 'numero', 'complemento', 'bairro', 'localidade', 'uf', 'cep', 'updatedAt', 'createdAt');
        }

        return array('__isInitialized__', 'id', 'evento', 'boleto', 'nome', 'email', 'cpf', 'dataNascimento', 'foneFixo', 'foneCelular', 'logradouro', 'numero', 'complemento', 'bairro', 'localidade', 'uf', 'cep', 'updatedAt', 'createdAt');
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Inscricao $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', array());
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', array());
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', array());

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', array());

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setId($id)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setId', array($id));

        return parent::setId($id);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvento', array());

        return parent::getEvento();
    }

    /**
     * {@inheritDoc}
     */
    public function setEvento(\TenilEvento\Entity\Evento $evento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEvento', array($evento));

        return parent::setEvento($evento);
    }

    /**
     * {@inheritDoc}
     */
    public function getNome()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNome', array());

        return parent::getNome();
    }

    /**
     * {@inheritDoc}
     */
    public function setNome($nome)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNome', array($nome));

        return parent::setNome($nome);
    }

    /**
     * {@inheritDoc}
     */
    public function getEmail()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEmail', array());

        return parent::getEmail();
    }

    /**
     * {@inheritDoc}
     */
    public function setEmail($email)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setEmail', array($email));

        return parent::setEmail($email);
    }

    /**
     * {@inheritDoc}
     */
    public function getCpf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCpf', array());

        return parent::getCpf();
    }

    /**
     * {@inheritDoc}
     */
    public function setCpf($cpf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCpf', array($cpf));

        return parent::setCpf($cpf);
    }

    /**
     * {@inheritDoc}
     */
    public function getDataNascimento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDataNascimento', array());

        return parent::getDataNascimento();
    }

    /**
     * {@inheritDoc}
     */
    public function setDataNascimento($dataNascimento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDataNascimento', array($dataNascimento));

        return parent::setDataNascimento($dataNascimento);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoneFixo()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoneFixo', array());

        return parent::getFoneFixo();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoneFixo($foneFixo)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoneFixo', array($foneFixo));

        return parent::setFoneFixo($foneFixo);
    }

    /**
     * {@inheritDoc}
     */
    public function getFoneCelular()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFoneCelular', array());

        return parent::getFoneCelular();
    }

    /**
     * {@inheritDoc}
     */
    public function setFoneCelular($foneCelular)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFoneCelular', array($foneCelular));

        return parent::setFoneCelular($foneCelular);
    }

    /**
     * {@inheritDoc}
     */
    public function getLogradouro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLogradouro', array());

        return parent::getLogradouro();
    }

    /**
     * {@inheritDoc}
     */
    public function setLogradouro($logradouro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLogradouro', array($logradouro));

        return parent::setLogradouro($logradouro);
    }

    /**
     * {@inheritDoc}
     */
    public function getNumero()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNumero', array());

        return parent::getNumero();
    }

    /**
     * {@inheritDoc}
     */
    public function setNumero($numero)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNumero', array($numero));

        return parent::setNumero($numero);
    }

    /**
     * {@inheritDoc}
     */
    public function getComplemento()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getComplemento', array());

        return parent::getComplemento();
    }

    /**
     * {@inheritDoc}
     */
    public function setComplemento($complemento)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setComplemento', array($complemento));

        return parent::setComplemento($complemento);
    }

    /**
     * {@inheritDoc}
     */
    public function getBairro()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBairro', array());

        return parent::getBairro();
    }

    /**
     * {@inheritDoc}
     */
    public function setBairro($bairro)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setBairro', array($bairro));

        return parent::setBairro($bairro);
    }

    /**
     * {@inheritDoc}
     */
    public function getLocalidade()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getLocalidade', array());

        return parent::getLocalidade();
    }

    /**
     * {@inheritDoc}
     */
    public function setLocalidade($localidade)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setLocalidade', array($localidade));

        return parent::setLocalidade($localidade);
    }

    /**
     * {@inheritDoc}
     */
    public function getUf()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUf', array());

        return parent::getUf();
    }

    /**
     * {@inheritDoc}
     */
    public function setUf($uf)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUf', array($uf));

        return parent::setUf($uf);
    }

    /**
     * {@inheritDoc}
     */
    public function getCep()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCep', array());

        return parent::getCep();
    }

    /**
     * {@inheritDoc}
     */
    public function setCep($cep)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCep', array($cep));

        return parent::setCep($cep);
    }

    /**
     * {@inheritDoc}
     */
    public function getBoleto()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBoleto', array());

        return parent::getBoleto();
    }

    /**
     * {@inheritDoc}
     */
    public function getUpdatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getUpdatedAt', array());

        return parent::getUpdatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setUpdatedAt($updatedAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setUpdatedAt', array($updatedAt));

        return parent::setUpdatedAt($updatedAt);
    }

    /**
     * {@inheritDoc}
     */
    public function getCreatedAt()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getCreatedAt', array());

        return parent::getCreatedAt();
    }

    /**
     * {@inheritDoc}
     */
    public function setCreatedAt(\DateTime $createdAt)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setCreatedAt', array($createdAt));

        return parent::setCreatedAt($createdAt);
    }

}