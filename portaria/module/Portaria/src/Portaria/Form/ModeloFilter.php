<?php

namespace Portaria\Form;

use Zend\InputFilter\InputFilter;
use Zend\Filter\StringTrim;
use Zend\Filter\StripTags;
use Zend\Validator\NotEmpty;
use Zend\Validator\StringLength;
use Zend\InputFilter\Input;
use Zend\Validator\InArray;


class ModeloFilter extends InputFilter
{
	protected $marca;
	
    public function __construct(Array $marca = array())
    {
    	$this->marca = $marca;
    	
    	$inArray = new InArray();
    	$inArray->setOptions(array('haystack' => $this->haystack($this->marca)));
    	
    	$marca = new Input('marca');
    	$marca->setRequired(true)
    	->getFilterChain()->attach(new StripTags())->attach(new StringTrim());
    	$marca->getValidatorChain()->attach($inArray);
    	$this->add($marca);
    	
		$descricao = new Input('descricao');
		$descricao->setRequired(true)
			->getFilterChain()
				->attach(new StringTrim())
				->attach(new StripTags());
		
		$descricao->getValidatorChain()->attach(new NotEmpty());
		$descricao->getValidatorChain()->attach(new StringLength(array('min'=>'2','max'=>'45')));
		$this->add($descricao);
	}
	
	/**
	 * @param array $haystack
	 *
	 * @return array
	 */
	public function haystack(Array $haystack = array())
	{
		$array = array();
		foreach($haystack as $value){
			if ($value)
				$array[$value['value']] = $value['label'];
		}
		return array_keys($array);
	}
}