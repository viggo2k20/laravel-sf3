{{-- Falsificacion de peticiones en sitios cruzados --}}
@csrf
@include('dashboard.structure.validation-error')
<div class="form-group">
    {{-- imput:text --}}
    <input type="text" name="publication" class="form-control" id="publication" placeholder="Publication Name"
        value="{{ old('publication', $post->publication) }}">
</div>
<div class="form-group">
    <select class="form-control" name="state_publication" id="state_publication">
        <option value="">Published</option>
        <option value="">Not Published</option>
        <option value="">In Revision</option>
    </select>
</div>
<div class="form-group">
    <textarea class="form-control" name="content_publication" id="content_publication" cols="30" rows="10"
        placeholder="Publication Content">
        {{ old('content_publication', $post->content_publication) }}
    </textarea>
</div>
<button type="submit" class="btn btn-success">Save</button>
<button class="btn btn-danger" href="{{ URL::previous() }}"> Cancel </button>
