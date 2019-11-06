
    <div class="nav-tabs-custom">
        <!-- Nav tabs -->
        <ul class="nav nav-tabs primary">
            <li class="active"><a href="#details" data-toggle="tab">Testimonial</a></li>
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-primary btn-sm" data-action='CREATE' data-form='#testimonial-testimonial-create'  data-load-to='#testimonial-testimonial-entry' data-datatable='#testimonial-testimonial-list'><i class="fa fa-floppy-o"></i> {{ trans('app.save') }}</button>
                <button type="button" class="btn btn-default btn-sm" data-action='CLOSE' data-load-to='#testimonial-testimonial-entry' data-href='{{guard_url('testimonial/testimonial/0')}}'><i class="fa fa-times-circle"></i> {{ trans('app.close') }}</button>
            </div>
        </ul>
        <div class="tab-content clearfix">
            {!!Form::vertical_open()
            ->id('testimonial-testimonial-create')
            ->method('POST')
            ->files('true')
            ->action(guard_url('testimonial/testimonial'))!!}
            <div class="tab-pane active" id="details">
                <div class="tab-pan-title">  {{ trans('app.new') }}  [{!! trans('testimonial::testimonial.name') !!}] </div>
                @include('testimonial::admin.testimonial.partial.entry', ['mode' => 'create'])
            </div>
            {!! Form::close() !!}
        </div>
    </div>