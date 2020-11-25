<?php

namespace App\Controllers;

use App\Models\ProdukModel;

class Home extends BaseController
{
	protected $produkModel;
	public function __construct()
	{
		$this->produkModel = new ProdukModel();
	}
	public function index()
	{
		$data = [
			"title" => "Home",
			"validation" => \Config\Services::validation(),
			"produk" => $this->produkModel->getProduk()
		];
		return view("index", $data);
	}

	public function add()
	{
		$data = [
			"title" => "Home",
			"validation" => \Config\Services::validation(),
			"produk" => $this->produkModel->getProduk()
		];
		return view("add", $data);
	}
	public function save()
	{
		if (!$this->validate([
			"nama_produk" => "required",
			"keterangan" => "required",
			"harga" => "required|integer",
			"jumlah" => "required|integer",
		])) {
			return redirect()->to("/add")->withInput();
		}
		$this->produkModel->save([
			"nama_produk" => $this->request->getVar("nama_produk"),
			"keterangan" => $this->request->getVar("keterangan"),
			"harga" => $this->request->getVar("harga"),
			"jumlah" => $this->request->getVar("jumlah"),
		]);
		session()->setFlashdata("pesan", "Data berhasil ditambahkan");
		return redirect()->to("/");
	}
	public function edit($id)
	{
		$data = [
			"title" => "Home",
			"validation" => \Config\Services::validation(),
			"produk" => $this->produkModel->getProduk($id)
		];
		return view("edit", $data);
	}
	public function update($id)
	{
		if (!$this->validate([
			"nama_produk" => "required",
			"keterangan" => "required",
			"harga" => "required|integer",
			"jumlah" => "required|integer",
		])) {
			return redirect()->to("/add")->withInput();
		}
		$this->produkModel->save([
			"id" => $id,
			"nama_produk" => $this->request->getVar("nama_produk"),
			"keterangan" => $this->request->getVar("keterangan"),
			"harga" => $this->request->getVar("harga"),
			"jumlah" => $this->request->getVar("jumlah"),
		]);
		session()->setFlashdata("pesan", "Data berhasil diubah");
		return redirect()->to("/");
	}
	public function del($id)
	{
		$this->produkModel->delete($id);
		session()->setFlashdata('pesan', 'Data berhasil dihapus');
		return redirect()->to('/');
	}
}
