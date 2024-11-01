<?php
    interface PlaybackDevice
    {
        public function playAudio(string $fileName):void;

        public function playVideo(string $fileName, string $resolution):void;

    }

    class Computer implements PlaybackDevice
    {

        #[\Override] public function playAudio(string $fileName): void
        {
            echo "Playing audio file '$fileName' on Computer with stereo sound.\n";
        }

        #[\Override] public function playVideo(string $fileName, string $resolution): void
        {
            echo "Playing video file '$fileName' on Computer at $resolution resolution.\n";
        }
    }

    class TV implements PlaybackDevice
    {
        #[\Override] public function playAudio(string $fileName): void
        {
            echo "Playing audio file '$fileName' on TV with surround sound.\n";
        }

        #[\Override] public function playVideo(string $fileName, string $resolution): void
        {
            echo "Playing video file '$fileName' on TV at 1080p resolution.\n";
        }
    }

    class Smartphone implements PlaybackDevice
    {
        public function playAudio(string $fileName): void
        {
            echo "Playing audio file '$fileName' on Smartphone with headphones.\n";
        }

        public function playVideo(string $fileName, string $resolution): void
        {
            echo "Playing video file '$fileName' on Smartphone at 720p resolution.\n";
        }
    }

    abstract class MediaFile
    {
        protected PlaybackDevice $device;

        /**
         * @param  PlaybackDevice  $device
         */
        public function __construct(PlaybackDevice $device)
        {
            $this->device = $device;
        }

        abstract public function play():void;
    }
    class AudioFile extends MediaFile
    {
        private string $fileName;

        public function __construct(string $fileName, PlaybackDevice $device)
        {
            parent::__construct($device);
            $this->fileName = $fileName;
        }

        public function play(): void
        {
            $this->device->playAudio($this->fileName);
        }
    }

    class VideoFile extends MediaFile
    {
        private string $fileName;
        private string $resolution;

        public function __construct(string $fileName, string $resolution, PlaybackDevice $device)
        {
            parent::__construct($device);
            $this->fileName = $fileName;
            $this->resolution = $resolution;
        }

        public function play(): void
        {
            $this->device->playVideo($this->fileName, $this->resolution);
        }
    }

    $computer = new Computer();
    $tv = new TV();
    $smartphone = new Smartphone();

    $audio = new AudioFile("song.mp3", $computer);
    $audio->play();

    $video = new VideoFile("movie.mp4", "1080p", $tv);
    $video->play();

    $videoOnPhone = new VideoFile("clip.mp4", "720p", $smartphone);
    $videoOnPhone->play();
