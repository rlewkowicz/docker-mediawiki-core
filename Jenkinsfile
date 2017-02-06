node{
  stage('Update Mediawiki') {
    git 'https://github.com/rlewkowicz/docker-mediawiki-core.git'
    sh([script: 'bash regenmediawiki' ])
  }
}
