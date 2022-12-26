<div>
    @if (session()->has('message'))
    <div class="alert alert-success" role="alert">
        {{session('message')}}
    </div>
    @endif
    <form wire:submit.prevent="store">
        @csrf 
        <div class="mb-3">
            <label for="title" class="form-label mt-1">{{__('Titulo:')}}</label>
            <input wire:model="title" type="text" class="form-control @error('title') is-invalid @enderror"> 
            @error('title')
            {{$message}}
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">{{__('Precio:')}}</label>
            <input wire:model="price" type="number" class="form-control @error('price') is -invalid 
                
            @enderror"> 
            @error('price')
                {{$message}}
            @enderror 
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">{{__('Categoria:')}}</label>
            <select wire:model.defer ="category" class="form-control">
                <option value="">{{__('Seleccionar categoría:')}}</option>
                @foreach ($categories as $category)
                    <option value="{{$category->id}}">{{__($category->name)}}</option>
                @endforeach
            </select>
        </div>
        
        <div class="mb-3">
            <label for="body" class="form-label">{{__('Descripcion:')}}</label>
            <textarea wire:model="body" rows="5" class="form-control @error('body') is-invalid
                
            @enderror"></textarea>  
            @error('body')
            {{$message}}
                
            @enderror
        </div>
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-warning mb-3">{{__('Crear')}}</button>
          </div>  
        
    </form> 
    
    
</div>
