<?php

namespace App\Filament\Pages;

use App\Settings\DetailSetting;
use Dotswan\MapPicker\Fields\Map;
use Filament\Forms;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Tabs;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Pages\SettingsPage;
use Illuminate\Support\HtmlString;

class ManageDetail extends SettingsPage
{
    protected static ?string $navigationIcon = 'heroicon-o-cog-6-tooth';

    protected static string $settings = DetailSetting::class;

    public function form(Form $form): Form
    {
        return $form
            ->schema([
                TextInput::make('email')
                    ->email()
                    ->required(),
                TextInput::make('phone')
                    ->required(),
                Forms\Components\FileUpload::make('logo')
                    ->image()
                    ->directory('settings/'.now()->format('Y/m/d'))
                    ->required(),
                Forms\Components\FileUpload::make('breadcrumbBackground')
                    ->image()
                    ->directory('settings/'.now()->format('Y/m/d'))
                    ->required(),
                Forms\Components\Textarea::make('careerDescription')
                    ->columnSpanFull()
                    ->rows(4)
                    ->required(),
                Forms\Components\Repeater::make('socials')
                    ->schema([
                        TextInput::make('link')->required()->url(),
                        Select::make('icon')
                            ->required()
                            ->searchable()
                            ->options([
                                'fa-facebook' => 'Facebook',
                                'fa-twitter' => 'Twitter',
                                'fa-instagram' => 'Instagram',
                                'fa-linkedin' => 'LinkedIn',
                                'fa-youtube' => 'YouTube',
                                'fa-pinterest' => 'Pinterest',
                                'fa-snapchat' => 'Snapchat',
                                'fa-tumblr' => 'Tumblr',
                                'fa-reddit' => 'Reddit',
                                'fa-whatsapp' => 'WhatsApp',
                                'fa-skype' => 'Skype',
                                'fa-github' => 'GitHub',
                                'fa-vimeo' => 'Vimeo',
                                'fa-spotify' => 'Spotify',
                                'fa-soundcloud' => 'SoundCloud',
                                'fa-twitch' => 'Twitch',
                                'fa-discord' => 'Discord',
                                'fa-slack' => 'Slack',
                                'fa-medium' => 'Medium',
                                'fa-dribbble' => 'Dribbble',
                                'fa-behance' => 'Behance',
                                'fa-flickr' => 'Flickr',
                                'fa-vine' => 'Vine',
                                'fa-tiktok' => 'TikTok',
                                'fa-weibo' => 'Weibo',
                                'fa-renren' => 'Renren',
                                'fa-vk' => 'VK',
                                'fa-wechat' => 'WeChat',
                                'fa-line' => 'Line',
                                'fa-telegram' => 'Telegram',
                                'fa-sketch' => 'Sketch',
                                'fa-codepen' => 'CodePen',
                                'fa-stack-overflow' => 'Stack Overflow',
                            ]),
                        TextInput::make('title')->required(),
                    ])
                    ->columnSpanFull()
                    ->columns(3),
                Repeater::make('branches')
                    ->columns(2)
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title')
                            ->required(),
                        TextInput::make('address')
                            ->required(),
                        TextInput::make('email')
                            ->email()
                            ->nullable(),
                        TextInput::make('phone')
                            ->nullable(),
                    ]),
                Map::make('location')
                    ->label('Location')
                    ->afterStateUpdated(function (Get $get, Set $set, string|array|null $old, ?array $state): void {
                        $set('latitude', $state['lat']);
                        $set('longitude', $state['lng']);
                    })
                    ->afterStateHydrated(function ($state, $record, Set $set): void {
                        $set('location', ['lat' => $state['lat'], 'lng' => $state['lng']]);
                    })
                    ->extraStyles([
                        'min-height: 250px',
                        'border-radius: 5px'
                    ])
                    ->liveLocation()
                    ->showMarker()
                    ->markerColor("#22c55eff")
                    ->showFullscreenControl()
                    ->showZoomControl()
                    ->columnSpanFull()
                    ->draggable()
                    ->tilesUrl("https://tile.openstreetmap.de/{z}/{x}/{y}.png")
                    ->zoom(10)
                    ->detectRetina()
                    ->showMyLocationButton()
                    ->extraTileControl([])
                    ->extraControl([
                        'zoomDelta'           => 1,
                        'zoomSnap'            => 2,
                    ]),


            ]);
    }
}
