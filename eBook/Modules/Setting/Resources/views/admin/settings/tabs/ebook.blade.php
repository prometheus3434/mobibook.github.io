{{ Form::checkbox('enable_ebook_upload', clean(trans('setting::attributes.enable_ebook_upload')), clean(trans('setting::settings.form.allow_user_to_upload_new_eBook_from_frontend')), $errors, $settings) }}
{{ Form::checkbox('auto_approve_ebook', clean(trans('setting::attributes.auto_approve_ebook')), clean(trans('setting::settings.form.auto_approve_ebook_after_upload')), $errors, $settings) }}
{{ Form::checkbox('auto_approve_reviews', clean(trans('setting::attributes.auto_approve_reviews')), clean(trans('setting::settings.form.approve_reviews_automatically')), $errors, $settings) }}

{{ Form::checkbox('enable_ebook_report', clean(trans('setting::attributes.enable_ebook_report')), '', $errors, $settings) }}
{{-- Form::checkbox('enable_ebook_print', clean(trans('setting::attributes.enable_ebook_print')), '', $errors, $settings) --}}
{{ Form::checkbox('enable_ebook_download', clean(trans('setting::attributes.enable_ebook_download')), '', $errors, $settings) }}
<?php /* {{ Form::select('allowed_file_types', clean(trans('setting::attributes.allowed_file_types')), $errors, clean(trans('setting::settings.form.allowed_file_types')), $settings, ['required' => true,'multiple' => true,'class'=>'select2 csselect2','help'=>clean(trans('setting::settings.form.allowed_file_types_help_text'))]) }} */ ?>