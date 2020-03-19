<?php

/*
	in general
*/
interface biosphere
{
	function walk();
	function fly();
	function swim();

}

class human implements biosphere
{
	/*will error*/
	/*human living style isn't swim and fly*/
}

class fish implements biosphere
{
	/*will error*/
	/*fish can't walk and fly*/
}

class bird implements biosphere
{
	/*will error*/
	/*most bird can't swim*/
}

/*
	SRP
*/
interface bird
{
	function fly();
}

interface fish 
{
	function swim();
}

interface human 
{
	function walk();
}

/*when use the instance you can implements some one*/
class dove implements bird 
{
	public function fly() 
	{
		/*write code here*/
	}
}

/*when use the instance you can implements some one*/
class catfish implements fish 
{
	public function swim() 
	{
		/*write code here*/
	}
}

/*
	SRP
	different view
*/
interface walk 
{
	function footNumber();
}

interface fly
{
	function height();
}

interface swim
{
	function depth();
}

class crab implements walk,swim
{
	public function footNumber() {}
	public function depth() {}
}
