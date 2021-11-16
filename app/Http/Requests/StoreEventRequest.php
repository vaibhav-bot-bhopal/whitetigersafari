<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreEventRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            'title' => 'required|max:255',
            'date' => 'required|date_format:Y-m-d',
            'time' => 'required|date_format:H:i',
            'place' => 'required|max:255',
            'description' => 'required',
            'image' => 'image|required|mimes:jpeg,bmp,png,jpg',
            'images.*' => 'image|mimes:jpeg,bmp,png,jpg',
        ];
    }

    public function messages()
    {
        if (session('locale') == 'en') {
            return [
                'title.required' => 'The event title field is required !!',
                'date.required' => 'The event date field is required !!',
                'date' => 'The event date is not a valid date !!',
                'time.required' => 'The event time field is required !!',
                'time.date_format' => 'The event time does not match the format :format.',
                'place.required' => 'The event place field is required !!',
                'description.required' => 'The event description field is required !!',
                'image.required' => 'The image field is required !!',
                'image' => 'The image field must be an image !!',
                'image.mimes' => 'The image must be a file of type: :values.',
                'images.*.mimes' => 'The images must be a file of type: :values.',
            ];
        }

        if (session('locale') == 'hi') {
            return [
                'title.required' => 'ईवेंट शीर्षक फ़ील्ड आवश्यक है !!',
                'date.required' => 'ईवेंट दिनांक फ़ील्ड आवश्यक है !!',
                'date' => 'इवेंट की तारीख मान्य तारीख नहीं है !!',
                'time.required' => 'ईवेंट समय फ़ील्ड आवश्यक है !!',
                'time.date_format' => 'ईवेंट का समय प्रारूप से मेल नहीं खाता :format.',
                'place.required' => 'इवेंट स्थान फील्ड आवश्यक है !!',
                'description.required' => 'इवेंट विवरण फ़ील्ड आवश्यक है !!',
                'image.required' => 'इमेज़ फ़ील्ड आवश्यक है !!',
                'image' => 'इमेज़ फ़ील्ड एक इमेज़ होना चाहिए !!',
                'image.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
                'images.*.mimes' => 'इमेज़ प्रकार की एक फ़ाइल होनी चाहिए: :values.',
            ];
        }
    }
}
