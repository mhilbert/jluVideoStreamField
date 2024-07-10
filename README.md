# jluVideoStreamField

This ILIAS plugin introduces a new DataCollection field to add a video to a DataCollection entry. The video can be shown in the table overview and/or integrated into the detailed view depending on the view settings. The video is represented by an URL to a video stream: https://link.to.my/video.mp4

At the Justus-Liebig-University of Giessen we use our Streaming-Server to serve these video streams.

The plugin is based on the HelloWorld plugin for ILIAS 5.2.x by Michael Herren from sr solutions ag (formerly studer+raimann ag), found in the ILIAS Developement Guide:
https://docu.ilias.de/goto_docu_pg_68695_42.html

## Getting Started

### Requirements

* ILIAS 8.x

### Installation

Start at your ILIAS root directory
```bash
mkdir -p Customizing/global/plugins/Modules/DataCollection/FieldTypeHook
cd Customizing/global/plugins/Modules/DataCollection/FieldTypeHook
git clone https://github.com/mhilbert/jluVideoStreamField.git jluVideoStreamField
```
Update, activate and config the plugin in the ILIAS Plugin Administration.

## License

This project is licensed under the GPL v3 License.
