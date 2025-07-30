# Drupal AI Demo with Google Gemini Integration

A proof-of-concept Drupal 11 project demonstrating AI-powered content management using Google Gemini through the Drupal AI module.

## 🚀 Features

- **Drupal 11** with modern PHP 8.4
- **Google Gemini AI Integration** via official provider module
- **Vector Database Support** with Pinecone integration
- **AI-Powered Search** capabilities
- **Secure API Key Management** using Key module
- **Containerized Development** with Lando
- **Advanced AI Content Operations**

## 🛠 Technology Stack

- **CMS**: Drupal 11.2.2
- **AI Provider**: Google Gemini API
- **Development Environment**: Lando
- **PHP Version**: 8.4
- **Database**: MySQL
- **Package Manager**: Composer

## 📦 Installed Modules

- **AI Module** (`drupal/ai`) - Core AI functionality
- **Key Module** (`drupal/key`) - Secure API key storage
- **Gemini Provider** (`drupal/gemini_provider`) - Official Google Gemini integration
- **Search API** (`drupal/search_api`) - Search indexing and querying
- **AI Search** (`drupal/ai_search`) - AI-powered search capabilities
- **AI VDB Provider Pinecone** (`drupal/ai_vdb_provider_pinecone`) - Vector database integration

## 🏃‍♂️ Quick Start

### Prerequisites
- [Lando](https://lando.dev/) installed on your system
- Google Gemini API key ([Get one here](https://ai.google.dev/))

### Installation

1. **Clone and start the project:**
   ```bash
   git clone <repository-url>
   cd drupal_ai
   lando start
   ```

2. **Access your site:**
   - **URL**: http://drupal-ai.lndo.site/
   - **Admin Login**: 
     - Username: `admin`
     - Password: `admin`

3. **Configure AI Providers:**
   - Go to `/admin/config/system/keys` and create keys for your API services:
     - Google Gemini API key ([Get one here](https://ai.google.dev/))
     - Pinecone API key ([Get one here](https://www.pinecone.io/))
   - Visit `/admin/config/system/ai` to configure AI providers
   - Configure vector database settings for Pinecone integration

## 🎯 Usage

### AI Provider Configuration
1. Set up API keys at `/admin/config/system/keys`
2. Configure AI providers at `/admin/config/system/ai`
3. Set up vector database connections for advanced AI operations

### AI Features Available
- **Content Generation**: Generate articles, descriptions, and text content using Gemini
- **Vector Search**: Advanced semantic search using Pinecone vector database
- **AI-Powered Search**: Enhanced search capabilities with AI integration
- **Smart Content Operations**: AI-assisted content management and analysis

## ⚙️ Configuration

### AI Provider Settings
Navigate to **Configuration > System > AI** (`/admin/config/system/ai`) to configure:

- **Gemini Provider**: Configure Google Gemini API integration
- **Vector Database**: Set up Pinecone for semantic search
- **Search Integration**: Configure AI-powered search capabilities

### API Key Management
Visit **Configuration > System > Keys** (`/admin/config/system/keys`) to securely store:
- Google Gemini API keys
- Pinecone API keys
- Other AI service credentials

## 🧪 Development

### Common Commands
```bash
# Start the environment
lando start

# Stop the environment
lando stop

# Install new modules
lando composer require drupal/module_name

# Clear cache
lando drush cr

# Export configuration
lando drush config:export

# Import configuration
lando drush config:import

# Access database
lando db-import database.sql

# SSH into container
lando ssh
```

### File Structure
```
drupal_ai/
├── .github/
│   └── copilot-instructions.md    # AI assistant instructions
├── web/                           # Drupal web root
│   ├── modules/custom/
│   │   └── gemini_ai/            # Custom Gemini integration
│   ├── sites/default/
│   └── ...
├── vendor/                        # Composer dependencies
├── composer.json                  # Project dependencies
├── .lando.yml                    # Lando configuration
└── README.md                     # This file
```

### Custom Module Development
The `gemini_ai` module provides:
- Form alterations for content editing
- AJAX-powered content generation
- Configuration management
- Integration with Drupal AI module framework

## 🔐 Security Notes

- API keys are stored securely using the Key module
- Never commit API keys to version control
- Use environment variables or secure key storage in production
- Implement proper rate limiting for AI API calls

## 🚀 Deployment

For production deployment:

1. **Environment Setup**:
   - Configure proper API key storage
   - Set up SSL/TLS certificates
   - Configure proper caching (Redis/Memcached)

2. **Performance Optimization**:
   - Enable Drupal caching
   - Implement AI response caching
   - Set up CDN for static assets

3. **Security Hardening**:
   - Update all modules regularly
   - Configure proper file permissions
   - Set up monitoring and logging

## 📚 Resources

- [Drupal AI Module Documentation](https://www.drupal.org/project/ai)
- [Google Gemini API Documentation](https://ai.google.dev/docs)
- [Lando Documentation](https://docs.lando.dev/)
- [Drupal 11 Documentation](https://www.drupal.org/docs/11)

## 🤝 Contributing

1. Fork the repository
2. Create a feature branch
3. Make your changes
4. Test thoroughly
5. Submit a pull request

## 📄 License

This project is open source and available under the [MIT License](LICENSE).

## 🆘 Support

For issues and questions:
- Check the [Drupal AI module issue queue](https://www.drupal.org/project/issues/ai)
- Review [Google Gemini API documentation](https://ai.google.dev/docs)
- Search [Drupal.org forums](https://www.drupal.org/forum)

---

**Happy coding with AI! 🤖✨**
