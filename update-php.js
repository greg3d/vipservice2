const fs = require('fs');
const path = require('path');

const buildDir = path.resolve(__dirname, 'www/bitrix/templates/vipservice2/assets');
const phpFilePath = path.resolve(__dirname, 'www/bitrix/templates/vipservice2/header.php');
const phpFilePath2 = path.resolve(__dirname, 'www/bitrix/templates/vipservice2/header2.php');

const updatePhpFile = () => {
    const phpFileContent = fs.readFileSync(phpFilePath, 'utf8');

    const files = fs.readdirSync(buildDir);



    let updatedContent = phpFileContent;

    files.forEach(file => {
        const ext = path.extname(file);
        const baseName = path.basename(file, ext);


        if (ext === '.js') {
            // Update the JS file reference
            updatedContent = updatedContent.replace(/main\.[A-Za-z0-9]+\.js/, baseName + '.js');
        } else if (ext === '.css') {
            // Update the CSS file reference
            updatedContent = updatedContent.replace(/main\.[A-Za-z0-9]+\.css/, baseName + '.css');
        }
    });

    fs.writeFileSync(phpFilePath, updatedContent, 'utf8');
}

updatePhpFile();
console.log('done');