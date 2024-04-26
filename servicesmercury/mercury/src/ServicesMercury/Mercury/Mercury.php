<?php

namespace ServicesMercury\Mercury;

use Illuminate\Http\Request;

class Mercury
{
	/**
   * The Request store.
   *
   * @var Illuminate\Http\Request
   */
  protected $request;

	/**
   * Used to detect chaining.
   *
   * @var bool
   */
  protected $or;

	/**
	 * Stores previous value if chaining.
	 *
	 * @var bool
	 */
	protected $previous;


	/**
	 * Construct a new EasyNav instance
	 *
	 * @param Illuminate\Http\Request 		$request
	 */
	function __construct(Request $request)
	{
		$this->request = $request;
		$this->or = false;
	}

	protected function dump()
	{
		dd($this->request);
	}


	/**
	 * @return string
	 */
	public function hello()
	{
		return "hello Mercury";
	}








}
