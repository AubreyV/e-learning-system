<div class="form-group row align-items-center">
    <div class="col-9">
        <input type="text" class="form-control" id="choices" name="word[choices][{{ $i }}][content]">
    </div>
    <div class="form-check col-3">
        <input class="form-check-input" type="checkbox" id="words_choices_{{ $i }}_value" name="word[choices][{{ $i }}][correct]" value="true">
        <label class="form-check-label" for="words_choices_{{ $i }}_value">
            Correct
        </label>
    </div>
</div>