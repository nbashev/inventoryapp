<!-- Product Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_category_id', 'Product Category:') !!}
    {!! Form::select('product_category_id', $categories, null, ['class' => 'form-control']) !!}
</div>

<!-- Product Sub Category Id Field -->
<div class="form-group col-sm-6">
    {!! Form::label('product_sub_category_id', 'Product Sub Category:') !!}
    {!! Form::select('product_sub_category_id', $subCategories,$product==null?null:$product->sub_category->id, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-6">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Price Field -->
<div class="form-group col-sm-6">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::text('price', null, ['class' => 'form-control']) !!}
</div>


<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>


<!-- Submit Field -->
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('products.index') !!}" class="btn btn-default">Cancel</a>
</div>
