@extends('layouts.app') {{-- Gọi file layout vừa tạo ở trên --}}

@section('content') {{-- Bắt đầu phần nội dung riêng --}}
<div class="container py-5">
    <div class="text-center mb-5">
        <h2 class="fw-bold">Sản phẩm tiêu biểu</h2>
        <p class="text-muted">Những dự án tâm huyết của tôi</p>
    </div>

    <div class="row g-4">
        @forelse($projects as $project)
            <div class="col-md-4">
                <div class="card h-100 border-0 shadow-sm hover-shadow">
                    <img src="https://picsum.photos/600/400?random={{ $project->id }}" class="card-img-top" alt="...">
                    <div class="card-body">
                        <h5 class="card-title fw-bold">{{ $project->title }}</h5>
                        <p class="card-text text-secondary">{{ $project->description }}</p>
                    </div>
                    <div class="card-footer bg-white border-0 pb-3">
                        <a href="{{ $project->link }}" class="btn btn-primary w-100">Chi tiết</a>
                    </div>
                </div>
            </div>
        @empty
            <div class="col-12 text-center">
                <p>Hiện chưa có dự án nào để hiển thị.</p>
            </div>
        @endforelse
    </div>
</div>
@endsection