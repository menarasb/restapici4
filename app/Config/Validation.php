<?php

namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];
	public $pegawai_insert = [
		'nama' => [
			'label' => 'Nama',
			'rules' => 'required',
			'errors' => '{field} harus diisi!'
		],
		'nip' => [
			'label' => 'NIP',
			'rules' => 'required|is_unique[pegawai.nip]',
			'errors' => [
				'required' => '{field} harus diisi!',
				'is_unique' => '{field} sudah ada!'
			]
		],

	];
	public $pegawai_update = [
		'nama' => [
			'label' => 'Nama',
			'rules' => 'required',
			'errors' => '{field} harus diisi!'
		],
		'nip' => [
			'label' => 'NIP',
			'rules' => 'required',
			'errors' => [
				'required' => '{field} harus diisi!'
			]
		],

	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
}
