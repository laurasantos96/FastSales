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
            {{__($message)}}
            @enderror
        </div>
        
        <div class="mb-3">
            <label for="price" class="form-label">{{__('Precio:')}}</label>
            <input wire:model="price" type="number" class="form-control @error('price') is -invalid 
                
            @enderror"> 
            @error('price')
            {{__($message)}}
            @enderror 
        </div>

        <div class="mb-3">
            <label for="category" class="form-label">{{__('Categoria:')}}</label>
            <select wire:model.defer ="category" class="form-control">
                <option value="">{{__('Seleccionar categoría')}}</option>
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
            {{__($message)}}
                
            @enderror
        </div>
        <div class="mb-3">
            <input wire:model="temporary_images" type="file" name="images" multiple class="form-control shadow @error('temporary_images.*') is-invalid @enderror">
            @error('temporary_images.*')
            <p class="text-danger mt-2">{{__($message)}}</p>
            @enderror
        </div>
        @if (!empty($images))
            <div class="row">
                <div class="col-12">
                    <p>{{__('Vista previa')}}:</p>
                    <div class="row">
                        @foreach ($images as $key=>$image)
                            <div class="col-12 col-md-4">
                                <img src="{{$image->temporaryUrl()}}" alt="" class="img-fluid">
                                <button type="button" class="btn btn-danger" wire:click="removeImage({{$key}})">{{__('Eliminar')}}</button>
                            </div>
                        @endforeach
                    </div>

                </div>
            </div>
            
        @endif
        <div class="d-flex justify-content-center">
            <button type="submit" class="btn btn-warning mb-3">{{__('Crear')}}</button>
        </div>  
        
    </form> 
    
    
</div>
