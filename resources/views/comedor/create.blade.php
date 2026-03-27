@extends('layouts.app')

@section('title', 'Registro de Alergias - Healthy Kids')

@section('content')
<section class="section" style="background-color: var(--white);">
    <div class="container">
        <div class="section-title">
            <h2>Registro de Alergias y Preferencias</h2>
            <p>Complete el formulario para registrar las alergias, intolerancias y preferencias alimentarias del estudiante</p>
        </div>

        @if(session('success'))
            <div style="background: #d4edda; color: #155724; padding: 15px; border-radius: 5px; margin-bottom: 30px; border: 1px solid #c3e6cb;">
                {{ session('success') }}
            </div>
        @endif

        @if($errors->any())
            <div style="background: #f8d7da; color: #721c24; padding: 15px; border-radius: 5px; margin-bottom: 30px; border: 1px solid #f5c6cb;">
                <ul style="margin: 0; padding-left: 20px;">
                    @foreach($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('alergias.store') }}" method="POST" class="registration-form">
            @csrf
            <div class="form-group">
                <label for="nombre_completo">Nombre Completo del Estudiante *</label>
                <input type="text" id="nombre_completo" name="nombre_completo" value="{{ old('nombre_completo') }}" required>
            </div>

            <div class="form-group">
                <label for="grado">Grado *</label>
                <select id="grado" name="grado" required>
                    <option value="">Seleccione el grado</option>
                    <option value="Preescolar" {{ old('grado') == 'Preescolar' ? 'selected' : '' }}>Preescolar</option>
                    <option value="1° Primaria" {{ old('grado') == '1° Primaria' ? 'selected' : '' }}>1° Primaria</option>
                    <option value="2° Primaria" {{ old('grado') == '2° Primaria' ? 'selected' : '' }}>2° Primaria</option>
                    <option value="3° Primaria" {{ old('grado') == '3° Primaria' ? 'selected' : '' }}>3° Primaria</option>
                    <option value="4° Primaria" {{ old('grado') == '4° Primaria' ? 'selected' : '' }}>4° Primaria</option>
                    <option value="5° Primaria" {{ old('grado') == '5° Primaria' ? 'selected' : '' }}>5° Primaria</option>
                    <option value="6° Primaria" {{ old('grado') == '6° Primaria' ? 'selected' : '' }}>6° Primaria</option>
                    <option value="7° Secundaria" {{ old('grado') == '7° Secundaria' ? 'selected' : '' }}>7° Secundaria</option>
                    <option value="8° Secundaria" {{ old('grado') == '8° Secundaria' ? 'selected' : '' }}>8° Secundaria</option>
                    <option value="9° Secundaria" {{ old('grado') == '9° Secundaria' ? 'selected' : '' }}>9° Secundaria</option>
                    <option value="10° Secundaria" {{ old('grado') == '10° Secundaria' ? 'selected' : '' }}>10° Secundaria</option>
                    <option value="11° Secundaria" {{ old('grado') == '11° Secundaria' ? 'selected' : '' }}>11° Secundaria</option>
                </select>
            </div>

            <div class="form-group">
                <label for="alergias">Alergias Alimentarias Conocidas</label>
                <textarea id="alergias" name="alergias" placeholder="Ej: Maní, mariscos, lácteos, huevos, etc.">{{ old('alergias') }}</textarea>
            </div>

            <div class="form-group">
                <label for="intolerancias">Intolerancias Alimentarias</label>
                <textarea id="intolerancias" name="intolerancias" placeholder="Ej: Lactosa, gluten, fructosa, etc.">{{ old('intolerancias') }}</textarea>
            </div>

            <div class="form-group">
                <label for="preferencias">Preferencias Alimentarias</label>
                <textarea id="preferencias" name="preferencias" placeholder="Ej: Vegetariano, sin carne de cerdo, etc.">{{ old('preferencias') }}</textarea>
            </div>

            <div class="form-group">
                <label for="contacto_emergencia">Contacto de Emergencia *</label>
                <input type="text" id="contacto_emergencia" name="contacto_emergencia" value="{{ old('contacto_emergencia') }}" required>
            </div>

            <div class="form-group">
                <label for="telefono_emergencia">Teléfono de Emergencia *</label>
                <input type="tel" id="telefono_emergencia" name="telefono_emergencia" value="{{ old('telefono_emergencia') }}" required>
            </div>

            <div class="form-actions">
                <button type="submit" class="btn">Registrar Alergias</button>
                <button type="reset" class="btn btn-secondary">Limpiar Formulario</button>
            </div>
        </form>
    </div>
</section>

<style>
    .registration-form {
        max-width: 800px;
        margin: 0 auto;
        background: var(--light);
        padding: 40px;
        border-radius: 15px;
        box-shadow: var(--shadow);
    }

    .form-group {
        margin-bottom: 25px;
    }

    .form-group label {
        display: block;
        margin-bottom: 8px;
        font-weight: 600;
        color: var(--primary-dark);
    }

    .form-group input,
    .form-group select,
    .form-group textarea {
        width: 100%;
        padding: 12px 15px;
        border: 2px solid #e0e0e0;
        border-radius: 8px;
        font-size: 1rem;
        transition: var(--transition);
    }

    .form-group input:focus,
    .form-group select:focus,
    .form-group textarea:focus {
        border-color: var(--primary);
        outline: none;
        box-shadow: 0 0 0 3px rgba(30, 136, 229, 0.1);
    }

    .form-group textarea {
        min-height: 100px;
        resize: vertical;
    }

    .form-actions {
        display: flex;
        gap: 15px;
        justify-content: center;
        margin-top: 30px;
    }

    @media (max-width: 768px) {
        .form-actions {
            flex-direction: column;
        }
        
        .registration-form {
            padding: 20px;
        }
    }
</style>
@endsection