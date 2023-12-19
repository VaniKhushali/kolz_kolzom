<div>
    <div class="row"> 
        @foreach($values as $value)
            <div class="col-md-4"> 
                <div>
                    <p>{{$value->attributes->name}}</p>
                    <select name="" class="form-control">
                        <option value="">Select {{$value->attributes->name}}</option>
                        @foreach($value->catval as $catOp)
                            <option value="{{$catOp->id}}">{{$catOp->value}}</option>
                        @endforeach
                    </select>
                </div>
            </div>
        @endforeach
    </div>
</div>