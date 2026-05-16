@extends('layout.padrao')

@section('conteudo')
<div class="container py-5">
    <div class="row justify-content-center">
        <div class="col-md-8">

            <div class="card shadow-sm">
                <div class="card-header bg-primary text-white d-flex align-items-center gap-2">
                    <svg xmlns="http://www.w3.org/2000/svg" width="22" height="22" fill="currentColor"
                        class="bi bi-person-circle" viewBox="0 0 16 16">
                        <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z"/>
                        <path fill-rule="evenodd"
                            d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805
                            10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z"/>
                    </svg>
                    <h5 class="mb-0">Detalhes do Usuário</h5>
                </div>

                <div class="card-body">
                    @if(session('success'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            {{ session('success') }}
                            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                        </div>
                    @endif

                    <table class="table table-bordered table-striped">
                        <tbody>
                            <tr>
                                <th class="w-35 table-light">ID</th>
                                <td>{{ $user->id }}</td>
                            </tr>
                            <tr>
                                <th class="table-light">Nome</th>
                                <td>{{ $user->name }}</td>
                            </tr>
                            <tr>
                                <th class="table-light">E-mail</th>
                                <td>{{ $user->email }}</td>
                            </tr>
                            <tr>
                                <th class="table-light">Telefone</th>
                                <td>{{ $user->telefone ?? '—' }}</td>
                            </tr>
                            <tr>
                                <th class="table-light">Data de Nascimento</th>
                                <td>
                                    {{ $user->data_nascimento
                                        ? \Carbon\Carbon::parse($user->data_nascimento)->format('d/m/Y')
                                        : '—' }}
                                </td>
                            </tr>
                            <tr>
                                <th class="table-light">Status</th>
                                <td>
                                    <span class="badge
                                        {{ $user->status === 'ativo' ? 'bg-success' : 'bg-secondary' }}">
                                        {{ ucfirst($user->status) }}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <th class="table-light">Cadastrado em</th>
                                <td>{{ $user->created_at->format('d/m/Y H:i') }}</td>
                            </tr>
                        </tbody>
                    </table>
                </div>

                <div class="card-footer d-flex gap-2">
                    <a href="{{ route('users.index') }}" class="btn btn-secondary btn-sm">
                        ← Voltar
                    </a>
                    <a href="{{ route('users.edit', $user->id) }}" class="btn btn-warning btn-sm">
                        ✏️ Editar
                    </a>
                    <form action="{{ route('users.destroy', $user->id) }}" method="POST"
                          onsubmit="return confirm('Deseja excluir este usuário?')" class="ms-auto">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger btn-sm">🗑 Excluir</button>
                    </form>
                </div>
            </div>

        </div>
    </div>
</div>
@endsection
