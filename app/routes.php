<?php

declare(strict_types=1);

use App\Application\Actions\User\ListUsersAction;
use App\Application\Actions\User\ViewUserAction;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Slim\App;
use Slim\Interfaces\RouteCollectorProxyInterface as Group;

return function (App $app) {
    $app->options('/{routes:.*}', function (Request $request, Response $response) {
        // CORS Pre-Flight OPTIONS Request Handler
        return $response;
    });

    $app->get('/', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'home.twig', [
            'pathInfo' => $request->getUri()->getPath(),
        ]);
    });

    $app->get('/documentry', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'documentry.twig', [
            'pathInfo' => $request->getUri()->getPath(),
            'items' => [
                [
                    'title' => 'Lost by Envy',
                    'youtube' => 'https://www.youtube.com/embed/GhBmjCY7Z9E?si=sfz1dF6IxionKkCJ',
                    'description' => '
                        <p>Pressure, depression, self-reflection and self-doubt. These are the themes I explore in this short experimental documentary titled “Lost”. I tried to express the depth of human emotion and action through a vulnerable in-depth look at my situation and emotional thought process. This documentary is a form of therapy for myself and for others.</p>
                        <p><b>Role: Cinematographer which was nominated and won “Best Documentary” award at the Coventry Phoenix Film Festival 2024</b></p>
                    '
                ],
                
                [
                    'title' => 'Creative Artist - Lo Williams | Short documentary',
                    'youtube' => 'https://www.youtube.com/embed/lifAGcNHLzQ?si=28ISO7Up1DFIB9Cr',
                    'description' => '
                        <p>Creative artist is a short documentary where artist express her inner life, thoughts and reflections on life purpose and how she hopes to impact the people through her art. </p>
                        <p>Explore the journey into the life and artistry of Lo Williams, a visionary creative activist and founder of LoDesignz. Journey through her personal narrative from childhood influences to her impactful role in the artistic community, witness candid moments in her vibrant gallery and delve into the behind-the-scenes of her street art projects. Experience the power of art to inspire change and transcend boundaries in this compelling portrait of resilience and creativity.</p>                        
                        <p><b>Role: Director|Editor|Colorist</b></p>
                    '
                ],
                
                [
                    'title' => 'poetic documentary',
                    'youtube' => 'https://www.youtube.com/embed/ku0CUEha3DU',
                    'description' => '
                        <p>Creative artist is a short documentary where artist express her inner life, thoughts and reflections on life purpose and how she hopes to impact the people through her art. </p>
                        <p>I am creating my own creative path. In this journey, I am wondering and asking questions to myself about creativity. These questions have been swirling in my mind, leaving me confused and one day I wondered.....if my confusion itself is a form of creativity? So to express my questions and doubts creatively and produce meaningful work I have created a one-minute poetic documentary that captures my personal feelings of confusion and wandering thoughts.</p>                        
                        <p><b>Role: Director|Cinematographer|Editor</b></p>
                    '
                ],
                
                [
                    'title' => 'MINSTREL QUEST FOR MUSEUM',
                    'youtube' => 'https://www.youtube.com/embed/xDI1AVZtr9g?si=OUCsjJwkr6X05Uph',
                    'description' => '<p>
                                        Kundali of Indie minstrel<br><br>
                                        Namaste! <br><br>
                                        We Saugat Upreti (le. la), Nepal-based Artist and Curator at project Naadhe, and Ranjan Rimal (Filmmaker) have embarked on a journey of a musical documentary film of the Gandharva village located in Kechana, Jhapa, Indian Border. <br><br>
                                        The story of the musical community\'s quest to build a tiny museum - to establish their pastoral cultural essence and advocate cultural dignity. The battalion of minstrels on a relentless journey from village to village, public administration to political authorities to build a museum. <br><br>
                                        We intend to film the entire journey through different landscapes and travel with them to complete this documentary film and find the answers to their motivation, inspiration, and intention.
                                          <p><b>Role: Cinematographer</b></p>
                                    </p>'
                                  
                ],
            ]
        ]);
    });
    $app->get('/music-video', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'music-video.twig', [
            'pathInfo' => $request->getUri()->getPath(),
            'items' => [
                
                [
                    'title' => 'AV- Dastaan (Official Music Video) Ft. ‪@_EnvyD‬ | Guitar by Ameed Fardeen | Prod. by AV',
                    'youtube' => 'https://www.youtube.com/embed/Hfy182ZTiCo?si=eYZm2C5pkUVtBCIZ',
                    'description' => '
                        <p>Dastaan Official Music Video 2025</p>
                        <p><b>Role: Cinematographer|Editor|Colorist</b></p>
                    '
                ],
                
                [
                    'title' => 'Kalki - River Flow (Official Music Video 2025)',
                    'youtube' => 'https://www.youtube.com/embed/tN1Tco0ArJc?si=bgw3LhcJraPIklc3',
                    'description' => '
                        <p>
                           This music video to raise awareness about the Rally for Rivers and the Cauvery Calling movement initiated by Sadhguru and the Isha Foundation. This initiative serves as a catalyst for global awareness on river revitalization. Cauvery Calling is not just a campaign; it’s a generational commitment to celebrating life and restoring our rivers, soil, and agriculture—the greatest legacy we can leave for future generations. Join us in this movement. Let’s make the Cauvery flow again, along with all our rivers.
                        </p>
                        <p><b>Role: Directed/Shot/Edited</b></p>
                    '
                ],
                
                [
                    'title' => 'BOBBY TRIPP - THOTIANA ( Official Music Video )',
                    'youtube' => 'https://www.youtube.com/embed/kG2XhNxsxtA?si=HBk5H6k5O-npTIVS',
                    'description' => '
                        <p>Bobby Tripp\'s debut official music video for THOTIANA is Out Now! SLATT💚</p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],
                [
                    'title' => '"HORA" - VYOMA Ft @MaheshDong X Birendra Keshari | Official Music Video | GYAN GATI',
                    'youtube' => 'https://www.youtube.com/embed/-29sOr4yIoc',
                    'description' => '
                        <p>
                            Official Music Video of the First Song From Album "GYAN GATI" | 2022 <br>
                            This collab of Vyoma & Dong.
                        </p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],
                
                [
                    'title' => 'Bishesh - Miss Garchu | Official Music Video | Beats By @TrapSideRecords',
                    'youtube' => 'https://www.youtube.com/embed/AQFRHNEFUSw?si=SEfoc4XUSOzYDH0t',
                    'description' => ' <p>
                            Bishesh - Miss Garchu | Official Music Video | Beats By @TrapSideRecords
                            <p><b>Role: Cinematographer</b></p>
                        </p>
                    '
                ],
                [
                    'title' => 'BISHESH- YO MERO THAU (OFFICIAL MUSIC VIDEO)',
                    'youtube' => 'https://www.youtube.com/embed/Q6MwVGxFZjU?si=ISTT9JroOl1G-eRk',
                    'description' => '<p>
                            BISHESH- YO MERO THAU (OFFICIAL MUSIC VIDEO)
                            <p><b>Role: Cinematographer</b></p>
                        </p>'
                ],
                [
                    'title' => 'Viber Saimon - Sangharsa Garr ( Prod : Vino Ramaldo ) nepali hiphop',
                    'youtube' => 'https://www.youtube.com/embed/vE4Y2t_1t5E?si=EZUr_XmkGMAEzmqW',
                    'description' => ' <p>
                            Viber Saimon - Sangharsa Garr ( Prod : Vino Ramaldo ) nepali hiphop<br>
                            <p><b>Role: Cinematographer</b></p>
                        </p>'
                ],
            ]
        ]);
    });
    $app->get('/short-film', function(Request $request, Response $response) {
        return $this->get('view')->render($response, 'shortfilm.twig', [
            'pathInfo' => $request->getUri()->getPath(),
            'items' => [
                
                [
                    'title' => 'The Blackwood House – Where Fear Feels Real / Short Film',
                    'youtube' => "https://www.youtube.com/embed/Zzl4D8aJ3S8?si=rFmgS60c_GUZQWOj" ,
                    'description' => '
                        <p>"The Blackwood House - A journey into the Mind, where reality Unravels and the walls Close in. A haunting exploration. where the Lines between Fear & Truth -- BLURS.</p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],
                
                [
                    'title' => '𝐀 𝐁 𝐇 𝐀 𝐒 𝐀 / 𝐒𝐇𝐎𝐑𝐓 𝐅𝐈𝐋𝐌 / 𝟐𝟎𝟐𝟒 / 𝐀𝐁𝐇𝐈𝐒𝐇𝐄𝐊 𝐏𝐀𝐒𝐒𝐈',
                    'youtube' => "https://www.youtube.com/embed/9Es0JvoyC-0?si=8LeGSOVKhLYIouFf" ,
                    'description' => '
                        <p>"ABHASA" is a short Horror/Thriller Film inspired by the multitude of paranormal incidents that have been documented in our contemporary, fast-paced world. These occurrences suggest the existence of an uncharted universe, which serves as the backdrop for my fictional narrative. - by Abhishek Passi & Team.</p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],
                
            ]
        ]);
    });
//    $app->get('/commercials', function (Request $request, Response $response) {
//
//        $files = glob(__DIR__ . '/../public/assets/commercials/*.{mp4}', GLOB_BRACE);
//
//        $items = [];
//        foreach ($files as $file) {
//            $filename = basename($file);
//            $poster = '/assets/commercials/posters/' . pathinfo($filename, PATHINFO_FILENAME) . '.jpg';
//            $items[] = [
//                'title' => pathinfo($filename, PATHINFO_FILENAME),
//                'video' => '/assets/commercials/' . $filename,
//                'description' => 'Commercial video: ' . $filename,
//                'poster' => file_exists(__DIR__ . '/../public' . $poster) ? $poster : '',
//            ];
//        }
//
//        return $this->get('view')->render($response, 'commercials-cat.twig', [
//            'pathInfo' => $request->getUri()->getPath(),
//            'items' => $items,
//        ]);
//    });
    $app->get('/commercials', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'commercials-cat.twig', [
            'pathInfo' => $request->getUri()->getPath(),
            'categories' => ['Sports', 'Travel'],
            'items' => [

                [
                    'category' => 'Sports',
                    'title' => 'The Blackwood House – Where Fear Feels Real / Short Film',
                    'youtube' => "https://www.youtube.com/embed/Zzl4D8aJ3S8?si=rFmgS60c_GUZQWOj" ,
                    'description' => '
                        <p>"The Blackwood House - A journey into the Mind, where reality Unravels and the walls Close in. A haunting exploration. where the Lines between Fear & Truth -- BLURS.</p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],

                [
                    'category' => 'Travel',
                    'title' => '𝐀 𝐁 𝐇 𝐀 𝐒 𝐀 / 𝐒𝐇𝐎𝐑𝐓 𝐅𝐈𝐋𝐌 / 𝟐𝟎𝟐𝟒 / 𝐀𝐁𝐇𝐈𝐒𝐇𝐄𝐊 𝐏𝐀𝐒𝐒𝐈',
                    'youtube' => "https://www.youtube.com/embed/9Es0JvoyC-0?si=8LeGSOVKhLYIouFf" ,
                    'description' => '
                        <p>"ABHASA" is a short Horror/Thriller Film inspired by the multitude of paranormal incidents that have been documented in our contemporary, fast-paced world. These occurrences suggest the existence of an uncharted universe, which serves as the backdrop for my fictional narrative. - by Abhishek Passi & Team.</p>
                        <p><b>Role: Cinematographer</b></p>
                    '
                ],

            ]
        ]);
    });
    $app->get('/travel', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'travel.twig', [
            'pathInfo' => $request->getUri()->getPath(),
        ]);
    });
    $app->get('/events', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'events.twig', [
            'pathInfo' => $request->getUri()->getPath(),
        ]);
    });
    $app->get('/bts', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'bts.twig', [
            'pathInfo' => $request->getUri()->getPath(),
        ]);
    });
};
