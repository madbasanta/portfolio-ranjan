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
        return $this->get('view')->render($response, 'index.twig');
    });

    $app->get('/documentry', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'documentry.twig', [
            'items' => [
                [
                    'title' => 'MINSTREL QUEST FOR MUSEUM',
                    'youtube' => 'https://www.youtube.com/embed/xDI1AVZtr9g?si=OUCsjJwkr6X05Uph',
                    'description' => '<p>
                                        Kundali of Indie minstrel<br><br>
                                        Namaste! <br><br>
                                        We Saugat Upreti (le. la), Nepal-based Artist and Curator at project Naadhe, and Ranjan Rimal (Filmmaker) have embarked on a journey of a musical documentary film of the Gandharva village located in Kechana, Jhapa, Indian Border. <br><br>
                                        The story of the musical community\'s quest to build a tiny museum - to establish their pastoral cultural essence and advocate cultural dignity. The battalion of minstrels on a relentless journey from village to village, public administration to political authorities to build a museum. <br><br>
                                        We intend to film the entire journey through different landscapes and travel with them to complete this documentary film and find the answers to their motivation, inspiration, and intention.
                                    </p>'
                ],
                [
                    'title' => 'Lost by Envy',
                    'youtube' => 'https://www.youtube.com/embed/GhBmjCY7Z9E?si=sfz1dF6IxionKkCJ',
                    'description' => '
                        <p>Pressure, depression, self-reflection and self-doubt. These are the themes I explore in this short experimental documentary titled “Lost”. I tried to express the depth of human emotion and action through a vulnerable in-depth look at my situation and emotional thought process. This documentary is a form of therapy for myself and for others.</p>
                    '
                ],
                [
                    'title' => 'Creative Artist | Lo Williams | Short Documentary',
                    'youtube' => 'https://www.youtube.com/embed/Kp3lqPRIjGQ?si=Xf2xIShGResaXcvT',
                    'description' => '
                        <p>Creative artist is a short documentary where artist express her inner life, thoughts and reflections on life purpose and how she hopes to impact the people through her art. </p>
                        <p>Explore the journey into the life and artistry of Lo Williams, a visionary creative activist and founder of LoDesignz, in this captivating documentary. Journey through her personal narrative from childhood influences to her impactful role in the artistic community, witness candid moments in her vibrant gallery and delve into the behind-the-scenes of her street art projects. Experience the power of art to inspire change and transcend boundaries in this compelling portrait of resilience and creativity.</p>                        
                        <p>Directed and Edited By: Ranjan Rimal</p>
                    '
                ],
                [
                    'title' => '𝐀 𝐁 𝐇 𝐀 𝐒 𝐀 / 𝐒𝐇𝐎𝐑𝐓 𝐅𝐈𝐋𝐌 / 𝟐𝟎𝟐𝟒 / 𝐀𝐁𝐇𝐈𝐒𝐇𝐄𝐊 𝐏𝐀𝐒𝐒𝐈',
                    'youtube' => "https://www.youtube.com/embed/9Es0JvoyC-0?si=8LeGSOVKhLYIouFf" ,
                    'description' => '
                        <p>"ABHASA" is a short Horror/Thriller Film inspired by the multitude of paranormal incidents that have been documented in our contemporary, fast-paced world. These occurrences suggest the existence of an uncharted universe, which serves as the backdrop for my fictional narrative. - by Abhishek Passi & Team.</p>
                        <p>Cinematographer - Ranjan Rimal</p>
                    '
                ]
            ]
        ]);
    });
    $app->get('/music-video', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'music-video.twig', [
            'items' => [
                [
                    'title' => 'BOBBY TRIPP - THOTIANA ( Official Music Video )',
                    'youtube' => 'https://www.youtube.com/embed/kG2XhNxsxtA?si=HBk5H6k5O-npTIVS',
                    'description' => '
                        <p>Bobby Tripp\'s debut official music video for THOTIANA is Out Now! SLATT💚</p>
                    '
                ],
                [
                    'title' => '"HORA" - VYOMA Ft @MaheshDong X Birendra Keshari | Official Music Video | GYAN GATI',
                    'youtube' => 'https://www.youtube.com/embed/-29sOr4yIoc',
                    'description' => '
                        <p>
                            Official Music Video of the First Song From Album "GYAN GATI" | 2022 <br>
                            This collab of Vyoma & Dong was initiated by our beloved Rollerx & Birendra Keshari
                            (MadhesiBeats). We
                            are very happy to have this project completed. Rest in paradise our brother Rollerx.
                        </p>
                    '
                ],
                [
                    'title' => 'Bishesh - Miss Garchu | Official Music Video | Beats By @TrapSideRecords',
                    'youtube' => 'https://www.youtube.com/embed/AQFRHNEFUSw?si=SEfoc4XUSOzYDH0t',
                    'description' => ' <p>
                            BISHESH - MISS GARCHU
                        </p>
                    '
                ],
                [
                    'title' => 'BISHESH- YO MERO THAU (OFFICIAL MUSIC VIDEO)',
                    'youtube' => 'https://www.youtube.com/embed/Q6MwVGxFZjU?si=ISTT9JroOl1G-eRk',
                    'description' => '<p>
                            BISHESH- YO MERO THAU
                        </p>'
                ],
                [
                    'title' => 'Viber Saimon - Sangharsa Garr ( Prod : Vino Ramaldo ) nepali hiphop',
                    'youtube' => 'https://www.youtube.com/embed/vE4Y2t_1t5E?si=EZUr_XmkGMAEzmqW',
                    'description' => ' <p>
                            Viber Saimon - Sangharsa Garr ( Prod : Vino Ramaldo ) nepali hiphop<br>
                            Cinematographer: Azure Blue and Ranjan Rimal
                        </p>'
                ],
                [
                    'title' => 'BOBBY TRIPP - RUSH (Official Music Video)',
                    'youtube' => 'https://www.youtube.com/embed/EC15yFqJGTc?si=DHGlnSj8cQMWtxM7',
                    'description' => ' An official Music Video for RUSH is Out Now! SLATT💚'
                ]
            ]
        ]);
    });
    $app->get('/commercials', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'commercials.twig');
    });
    $app->get('/travel', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'travel.twig');
    });
    $app->get('/events', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'events.twig');
    });
    $app->get('/bts', function (Request $request, Response $response) {
        return $this->get('view')->render($response, 'bts.twig');
    });
};
