# Copilot Instructions for Drupal AI Project

<!-- Use this file to provide workspace-specific custom instructions to Copilot. For more details, visit https://code.visualstudio.com/docs/copilot/copilot-customization#_use-a-githubcopilotinstructionsmd-file -->

## Project Overview
This is a Drupal 11 project with Google Gemini AI integration using the Drupal AI module (https://www.drupal.org/project/ai). The project demonstrates AI-powered content management and generation features.

## Technology Stack
- **CMS**: Drupal 11
- **Development Environment**: Lando (containerized local development)
- **AI Integration**: Drupal AI module with Google Gemini API
- **PHP Version**: 8.4
- **Database**: MySQL
- **Package Manager**: Composer

## Development Guidelines
- Use Drupal coding standards and best practices
- Follow Drupal's API patterns for module development
- Implement proper error handling and logging for AI interactions
- Use configuration management for AI provider settings
- Ensure security best practices for API key handling

## Key Modules
- **AI Module**: Core AI functionality and provider abstraction
- **Key Module**: Secure API key storage and management
- **Gemini Provider**: Official Google Gemini integration
- **AI VDB Provider Pinecone**: Vector database integration
- **AI Search**: AI-powered search capabilities
- **Custom Modules**: Located in `web/modules/custom/`

## Common Commands
- `lando start` - Start the development environment
- `lando drush cr` - Clear Drupal cache
- `lando drush config:export` - Export configuration
- `lando drush config:import` - Import configuration
- `lando composer require [module]` - Add new modules

## AI Integration Notes
- Configure Google Gemini API keys through the Key module
- AI providers are configured at `/admin/config/system/ai`
- Use AI services through Drupal's dependency injection system
- Implement proper rate limiting and error handling for AI API calls

## File Structure
- `web/` - Drupal web root
- `web/modules/custom/` - Custom module development
- `web/themes/custom/` - Custom theme development
- `config/` - Configuration management files
- `.lando.yml` - Lando configuration
