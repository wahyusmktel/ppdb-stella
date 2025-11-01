<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Service;
use Illuminate\Http\Request;
use RealRashid\SweetAlert\Facades\Alert; // <-- IMPORT FACADE ALERT

class ServiceController extends Controller
{
    /**
     * Menampilkan list services dengan pencarian dan paginasi.
     */
    public function index(Request $request)
    {
        $query = Service::query();

        // Logika Pencarian
        if ($request->has('search') && $request->search != '') {
            $query->where('title', 'like', '%' . $request->search . '%')
                ->orWhere('description', 'like', '%' . $request->search . '%');
        }

        $services = $query->orderBy('order', 'asc')->paginate(10);

        return view('admin.services.index', compact('services'));
    }

    /**
     * Menampilkan form create.
     */
    public function create()
    {
        return view('admin.services.create');
    }

    /**
     * Menyimpan data baru.
     */
    public function store(Request $request)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon_svg' => 'required|string', // Bisa diperketat nanti
            'order' => 'required|integer',
            'link_url' => 'nullable|url',
        ]);

        Service::create($validated);

        // Tampilkan notifikasi Sweet Alert
        Alert::success('Berhasil', 'Service baru telah ditambahkan!');

        return redirect()->route('admin.services.index');
    }

    /**
     * Menampilkan detail 1 service.
     */
    public function show(Service $service)
    {
        return view('admin.services.show', compact('service'));
    }

    /**
     * Menampilkan form edit.
     */
    public function edit(Service $service)
    {
        return view('admin.services.edit', compact('service'));
    }

    /**
     * Update data service.
     */
    public function update(Request $request, Service $service)
    {
        // Validasi
        $validated = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
            'icon_svg' => 'required|string',
            'order' => 'required|integer',
            'link_url' => 'nullable|url',
        ]);

        $service->update($validated);

        // Tampilkan notifikasi Sweet Alert
        Alert::success('Berhasil', 'Service telah diupdate!');

        return redirect()->route('admin.services.index');
    }

    /**
     * Hapus data service.
     */
    public function destroy(Service $service)
    {
        $service->delete();

        // Tampilkan notifikasi toast (popup kecil)
        Alert::toast('Service telah dihapus.', 'success')->position('top-end');

        return redirect()->route('admin.services.index');
    }
}
