<?php

declare(strict_types=1);

return array (
  'argumentsMapping' => 
  array (
    'SlackUserIdentity' => 
    array (
      'slackTeamId' => 'Plain\\Generated\\SlackUserIdentitySlackTeamIdArgs',
      'slackUserId' => 'Plain\\Generated\\SlackUserIdentitySlackUserIdArgs',
    ),
    'User' => 
    array (
      'id' => 'Plain\\Generated\\UserIdArgs',
      'fullName' => 'Plain\\Generated\\UserFullNameArgs',
      'publicName' => 'Plain\\Generated\\UserPublicNameArgs',
      'avatarUrl' => 'Plain\\Generated\\UserAvatarUrlArgs',
      'email' => 'Plain\\Generated\\UserEmailArgs',
      'roles' => 'Plain\\Generated\\UserRolesArgs',
      'role' => 'Plain\\Generated\\UserRoleArgs',
      'additionalLegacyRoles' => 'Plain\\Generated\\UserAdditionalLegacyRolesArgs',
      'slackIdentities' => 'Plain\\Generated\\UserSlackIdentitiesArgs',
      'labels' => 'Plain\\Generated\\UserLabelsArgs',
      'defaultSavedThreadsView' => 'Plain\\Generated\\UserDefaultSavedThreadsViewArgs',
      'status' => 'Plain\\Generated\\UserStatusArgs',
      'statusChangedAt' => 'Plain\\Generated\\UserStatusChangedAtArgs',
      'createdAt' => 'Plain\\Generated\\UserCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserUpdatedByArgs',
      'isDeleted' => 'Plain\\Generated\\UserIsDeletedArgs',
      'deletedAt' => 'Plain\\Generated\\UserDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\UserDeletedByArgs',
    ),
    'UserAccount' => 
    array (
      'id' => 'Plain\\Generated\\UserAccountIdArgs',
      'fullName' => 'Plain\\Generated\\UserAccountFullNameArgs',
      'publicName' => 'Plain\\Generated\\UserAccountPublicNameArgs',
      'email' => 'Plain\\Generated\\UserAccountEmailArgs',
    ),
    'Workspace' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceIdArgs',
      'name' => 'Plain\\Generated\\WorkspaceNameArgs',
      'publicName' => 'Plain\\Generated\\WorkspacePublicNameArgs',
      'isDemoWorkspace' => 'Plain\\Generated\\WorkspaceIsDemoWorkspaceArgs',
      'domainName' => 'Plain\\Generated\\WorkspaceDomainNameArgs',
      'domainNames' => 'Plain\\Generated\\WorkspaceDomainNamesArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceCreatedByArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceCreatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceUpdatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceUpdatedAtArgs',
      'workspaceEmailSettings' => 'Plain\\Generated\\WorkspaceWorkspaceEmailSettingsArgs',
      'workspaceChatSettings' => 'Plain\\Generated\\WorkspaceWorkspaceChatSettingsArgs',
      'logo' => 'Plain\\Generated\\WorkspaceLogoArgs',
    ),
    'WorkspaceInvite' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceInviteIdArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceInviteCreatedByArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceInviteCreatedAtArgs',
      'email' => 'Plain\\Generated\\WorkspaceInviteEmailArgs',
      'workspace' => 'Plain\\Generated\\WorkspaceInviteWorkspaceArgs',
      'isAccepted' => 'Plain\\Generated\\WorkspaceInviteIsAcceptedArgs',
      'roles' => 'Plain\\Generated\\WorkspaceInviteRolesArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceInviteUpdatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceInviteUpdatedAtArgs',
      'usingBillingRotaSeat' => 'Plain\\Generated\\WorkspaceInviteUsingBillingRotaSeatArgs',
      'role' => 'Plain\\Generated\\WorkspaceInviteRoleArgs',
      'customRole' => 'Plain\\Generated\\WorkspaceInviteCustomRoleArgs',
    ),
    'Role' => 
    array (
      'id' => 'Plain\\Generated\\RoleIdArgs',
      'name' => 'Plain\\Generated\\RoleNameArgs',
      'description' => 'Plain\\Generated\\RoleDescriptionArgs',
      'permissions' => 'Plain\\Generated\\RolePermissionsArgs',
      'isAssignableToCustomer' => 'Plain\\Generated\\RoleIsAssignableToCustomerArgs',
      'isAssignableToThread' => 'Plain\\Generated\\RoleIsAssignableToThreadArgs',
      'assignableBillingSeats' => 'Plain\\Generated\\RoleAssignableBillingSeatsArgs',
      'requiresBillableSeat' => 'Plain\\Generated\\RoleRequiresBillableSeatArgs',
      'key' => 'Plain\\Generated\\RoleKeyArgs',
      'customRoleId' => 'Plain\\Generated\\RoleCustomRoleIdArgs',
      'scopeDefinitions' => 'Plain\\Generated\\RoleScopeDefinitionsArgs',
    ),
    'RoleScopeDefinition' => 
    array (
      'resource' => 'Plain\\Generated\\RoleScopeDefinitionResourceArgs',
      'scopes' => 'Plain\\Generated\\RoleScopeDefinitionScopesArgs',
    ),
    'RoleScope' => 
    array (
      'primitiveType' => 'Plain\\Generated\\RoleScopePrimitiveTypeArgs',
      'accessMode' => 'Plain\\Generated\\RoleScopeAccessModeArgs',
      'values' => 'Plain\\Generated\\RoleScopeValuesArgs',
    ),
    'LabelType' => 
    array (
      'id' => 'Plain\\Generated\\LabelTypeIdArgs',
      'name' => 'Plain\\Generated\\LabelTypeNameArgs',
      'icon' => 'Plain\\Generated\\LabelTypeIconArgs',
      'color' => 'Plain\\Generated\\LabelTypeColorArgs',
      'type' => 'Plain\\Generated\\LabelTypeTypeArgs',
      'description' => 'Plain\\Generated\\LabelTypeDescriptionArgs',
      'parentLabelType' => 'Plain\\Generated\\LabelTypeParentLabelTypeArgs',
      'position' => 'Plain\\Generated\\LabelTypePositionArgs',
      'externalId' => 'Plain\\Generated\\LabelTypeExternalIdArgs',
      'isArchived' => 'Plain\\Generated\\LabelTypeIsArchivedArgs',
      'archivedBy' => 'Plain\\Generated\\LabelTypeArchivedByArgs',
      'archivedAt' => 'Plain\\Generated\\LabelTypeArchivedAtArgs',
      'createdAt' => 'Plain\\Generated\\LabelTypeCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\LabelTypeCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\LabelTypeUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\LabelTypeUpdatedByArgs',
    ),
    'Label' => 
    array (
      'id' => 'Plain\\Generated\\LabelIdArgs',
      'labelType' => 'Plain\\Generated\\LabelLabelTypeArgs',
      'createdAt' => 'Plain\\Generated\\LabelCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\LabelCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\LabelUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\LabelUpdatedByArgs',
    ),
    'EmailAddress' => 
    array (
      'email' => 'Plain\\Generated\\EmailAddressEmailArgs',
      'isVerified' => 'Plain\\Generated\\EmailAddressIsVerifiedArgs',
      'verifiedAt' => 'Plain\\Generated\\EmailAddressVerifiedAtArgs',
    ),
    'Company' => 
    array (
      'id' => 'Plain\\Generated\\CompanyIdArgs',
      'name' => 'Plain\\Generated\\CompanyNameArgs',
      'logoUrl' => 'Plain\\Generated\\CompanyLogoUrlArgs',
      'domainName' => 'Plain\\Generated\\CompanyDomainNameArgs',
      'createdAt' => 'Plain\\Generated\\CompanyCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CompanyCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CompanyUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CompanyUpdatedByArgs',
      'tier' => 'Plain\\Generated\\CompanyTierArgs',
      'threadChannelAssociations' => 'Plain\\Generated\\CompanyThreadChannelAssociationsArgs',
      'contractValue' => 'Plain\\Generated\\CompanyContractValueArgs',
      'accountOwner' => 'Plain\\Generated\\CompanyAccountOwnerArgs',
      'isDeleted' => 'Plain\\Generated\\CompanyIsDeletedArgs',
      'deletedAt' => 'Plain\\Generated\\CompanyDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\CompanyDeletedByArgs',
    ),
    'CompanyEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CompanyEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CompanyEdgeNodeArgs',
    ),
    'CompanyConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CompanyConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CompanyConnectionPageInfoArgs',
    ),
    'TenantEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TenantEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TenantEdgeNodeArgs',
    ),
    'TenantConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TenantConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TenantConnectionPageInfoArgs',
    ),
    'EmailCustomerIdentity' => 
    array (
      'email' => 'Plain\\Generated\\EmailCustomerIdentityEmailArgs',
    ),
    'DiscordCustomerIdentity' => 
    array (
      'discordUserId' => 'Plain\\Generated\\DiscordCustomerIdentityDiscordUserIdArgs',
    ),
    'SlackCustomerIdentity' => 
    array (
      'slackUserId' => 'Plain\\Generated\\SlackCustomerIdentitySlackUserIdArgs',
    ),
    'Customer' => 
    array (
      'id' => 'Plain\\Generated\\CustomerIdArgs',
      'externalId' => 'Plain\\Generated\\CustomerExternalIdArgs',
      'fullName' => 'Plain\\Generated\\CustomerFullNameArgs',
      'shortName' => 'Plain\\Generated\\CustomerShortNameArgs',
      'email' => 'Plain\\Generated\\CustomerEmailArgs',
      'avatarUrl' => 'Plain\\Generated\\CustomerAvatarUrlArgs',
      'assignedToUser' => 'Plain\\Generated\\CustomerAssignedToUserArgs',
      'assignedAt' => 'Plain\\Generated\\CustomerAssignedAtArgs',
      'customerGroupMemberships' => 'Plain\\Generated\\CustomerCustomerGroupMembershipsArgs',
      'tenantMemberships' => 'Plain\\Generated\\CustomerTenantMembershipsArgs',
      'company' => 'Plain\\Generated\\CustomerCompanyArgs',
      'isAnonymous' => 'Plain\\Generated\\CustomerIsAnonymousArgs',
      'createdAt' => 'Plain\\Generated\\CustomerCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerUpdatedByArgs',
      'markedAsSpamAt' => 'Plain\\Generated\\CustomerMarkedAsSpamAtArgs',
      'markedAsSpamBy' => 'Plain\\Generated\\CustomerMarkedAsSpamByArgs',
      'identities' => 'Plain\\Generated\\CustomerIdentitiesArgs',
      'status' => 'Plain\\Generated\\CustomerStatusArgs',
      'statusChangedAt' => 'Plain\\Generated\\CustomerStatusChangedAtArgs',
      'lastIdleAt' => 'Plain\\Generated\\CustomerLastIdleAtArgs',
    ),
    'CustomerGroup' => 
    array (
      'id' => 'Plain\\Generated\\CustomerGroupIdArgs',
      'name' => 'Plain\\Generated\\CustomerGroupNameArgs',
      'key' => 'Plain\\Generated\\CustomerGroupKeyArgs',
      'color' => 'Plain\\Generated\\CustomerGroupColorArgs',
      'externalId' => 'Plain\\Generated\\CustomerGroupExternalIdArgs',
      'createdAt' => 'Plain\\Generated\\CustomerGroupCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerGroupCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerGroupUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerGroupUpdatedByArgs',
    ),
    'CustomerGroupMembership' => 
    array (
      'customerId' => 'Plain\\Generated\\CustomerGroupMembershipCustomerIdArgs',
      'customerGroup' => 'Plain\\Generated\\CustomerGroupMembershipCustomerGroupArgs',
      'createdAt' => 'Plain\\Generated\\CustomerGroupMembershipCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerGroupMembershipCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerGroupMembershipUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerGroupMembershipUpdatedByArgs',
    ),
    'CustomerGroupEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerGroupEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerGroupEdgeNodeArgs',
    ),
    'CustomerGroupConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerGroupConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerGroupConnectionPageInfoArgs',
    ),
    'CustomerGroupMembershipEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerGroupMembershipEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerGroupMembershipEdgeNodeArgs',
    ),
    'CustomerGroupMembershipConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerGroupMembershipConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerGroupMembershipConnectionPageInfoArgs',
    ),
    'CustomerTenantMembership' => 
    array (
      'tenant' => 'Plain\\Generated\\CustomerTenantMembershipTenantArgs',
      'createdAt' => 'Plain\\Generated\\CustomerTenantMembershipCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerTenantMembershipCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerTenantMembershipUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerTenantMembershipUpdatedByArgs',
    ),
    'CustomerTenantMembershipEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerTenantMembershipEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerTenantMembershipEdgeNodeArgs',
    ),
    'CustomerTenantMembershipConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerTenantMembershipConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerTenantMembershipConnectionPageInfoArgs',
    ),
    'DependsOnThreadFieldType' => 
    array (
      'threadFieldSchemaId' => 'Plain\\Generated\\DependsOnThreadFieldTypeThreadFieldSchemaIdArgs',
      'threadFieldSchemaValue' => 'Plain\\Generated\\DependsOnThreadFieldTypeThreadFieldSchemaValueArgs',
    ),
    'DependsOnLabelType' => 
    array (
      'labelTypeId' => 'Plain\\Generated\\DependsOnLabelTypeLabelTypeIdArgs',
    ),
    'ThreadFieldSchema' => 
    array (
      'id' => 'Plain\\Generated\\ThreadFieldSchemaIdArgs',
      'label' => 'Plain\\Generated\\ThreadFieldSchemaLabelArgs',
      'key' => 'Plain\\Generated\\ThreadFieldSchemaKeyArgs',
      'description' => 'Plain\\Generated\\ThreadFieldSchemaDescriptionArgs',
      'order' => 'Plain\\Generated\\ThreadFieldSchemaOrderArgs',
      'type' => 'Plain\\Generated\\ThreadFieldSchemaTypeArgs',
      'enumValues' => 'Plain\\Generated\\ThreadFieldSchemaEnumValuesArgs',
      'defaultStringValue' => 'Plain\\Generated\\ThreadFieldSchemaDefaultStringValueArgs',
      'defaultBooleanValue' => 'Plain\\Generated\\ThreadFieldSchemaDefaultBooleanValueArgs',
      'isRequired' => 'Plain\\Generated\\ThreadFieldSchemaIsRequiredArgs',
      'isAiAutoFillEnabled' => 'Plain\\Generated\\ThreadFieldSchemaIsAiAutoFillEnabledArgs',
      'dependsOnThreadField' => 'Plain\\Generated\\ThreadFieldSchemaDependsOnThreadFieldArgs',
      'dependsOnLabels' => 'Plain\\Generated\\ThreadFieldSchemaDependsOnLabelsArgs',
      'createdAt' => 'Plain\\Generated\\ThreadFieldSchemaCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadFieldSchemaCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadFieldSchemaUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadFieldSchemaUpdatedByArgs',
    ),
    'ThreadField' => 
    array (
      'id' => 'Plain\\Generated\\ThreadFieldIdArgs',
      'threadId' => 'Plain\\Generated\\ThreadFieldThreadIdArgs',
      'key' => 'Plain\\Generated\\ThreadFieldKeyArgs',
      'type' => 'Plain\\Generated\\ThreadFieldTypeArgs',
      'isAiGenerated' => 'Plain\\Generated\\ThreadFieldIsAiGeneratedArgs',
      'stringValue' => 'Plain\\Generated\\ThreadFieldStringValueArgs',
      'booleanValue' => 'Plain\\Generated\\ThreadFieldBooleanValueArgs',
      'createdAt' => 'Plain\\Generated\\ThreadFieldCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadFieldCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadFieldUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadFieldUpdatedByArgs',
    ),
    'ThreadDiscussionSlackChannelDetails' => 
    array (
      'slackTeamId' => 'Plain\\Generated\\ThreadDiscussionSlackChannelDetailsSlackTeamIdArgs',
      'slackChannelId' => 'Plain\\Generated\\ThreadDiscussionSlackChannelDetailsSlackChannelIdArgs',
      'slackChannelName' => 'Plain\\Generated\\ThreadDiscussionSlackChannelDetailsSlackChannelNameArgs',
      'slackMessageLink' => 'Plain\\Generated\\ThreadDiscussionSlackChannelDetailsSlackMessageLinkArgs',
    ),
    'ThreadDiscussionEmailChannelDetails' => 
    array (
      'emailRecipients' => 'Plain\\Generated\\ThreadDiscussionEmailChannelDetailsEmailRecipientsArgs',
    ),
    'ThreadDiscussionCursorWorkspaceBackgroundAgentChannelDetails' => 
    array (
      'cursorWorkspaceIntegrationId' => 'Plain\\Generated\\ThreadDiscussionCursorWorkspaceBackgroundAgentChannelDetailsCursorWorkspaceIntegrationIdArgs',
      'repositoryUrl' => 'Plain\\Generated\\ThreadDiscussionCursorWorkspaceBackgroundAgentChannelDetailsRepositoryUrlArgs',
    ),
    'ThreadDiscussion' => 
    array (
      'id' => 'Plain\\Generated\\ThreadDiscussionIdArgs',
      'threadId' => 'Plain\\Generated\\ThreadDiscussionThreadIdArgs',
      'title' => 'Plain\\Generated\\ThreadDiscussionTitleArgs',
      'messages' => 'Plain\\Generated\\ThreadDiscussionMessagesArgs',
      'resolvedAt' => 'Plain\\Generated\\ThreadDiscussionResolvedAtArgs',
      'createdAt' => 'Plain\\Generated\\ThreadDiscussionCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadDiscussionCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadDiscussionUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadDiscussionUpdatedByArgs',
      'channelDetails' => 'Plain\\Generated\\ThreadDiscussionChannelDetailsArgs',
      'type' => 'Plain\\Generated\\ThreadDiscussionTypeArgs',
      'slackTeamId' => 'Plain\\Generated\\ThreadDiscussionSlackTeamIdArgs',
      'slackChannelId' => 'Plain\\Generated\\ThreadDiscussionSlackChannelIdArgs',
      'slackChannelName' => 'Plain\\Generated\\ThreadDiscussionSlackChannelNameArgs',
      'slackMessageLink' => 'Plain\\Generated\\ThreadDiscussionSlackMessageLinkArgs',
      'emailRecipients' => 'Plain\\Generated\\ThreadDiscussionEmailRecipientsArgs',
    ),
    'ThreadDiscussionMessageConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadDiscussionMessageConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadDiscussionMessageConnectionPageInfoArgs',
    ),
    'ThreadDiscussionMessageEdge' => 
    array (
      'node' => 'Plain\\Generated\\ThreadDiscussionMessageEdgeNodeArgs',
      'cursor' => 'Plain\\Generated\\ThreadDiscussionMessageEdgeCursorArgs',
    ),
    'ThreadDiscussionMessageReaction' => 
    array (
      'name' => 'Plain\\Generated\\ThreadDiscussionMessageReactionNameArgs',
      'actors' => 'Plain\\Generated\\ThreadDiscussionMessageReactionActorsArgs',
      'imageUrl' => 'Plain\\Generated\\ThreadDiscussionMessageReactionImageUrlArgs',
    ),
    'ThreadDiscussionMessage' => 
    array (
      'id' => 'Plain\\Generated\\ThreadDiscussionMessageIdArgs',
      'threadDiscussionId' => 'Plain\\Generated\\ThreadDiscussionMessageThreadDiscussionIdArgs',
      'text' => 'Plain\\Generated\\ThreadDiscussionMessageTextArgs',
      'slackMessageLink' => 'Plain\\Generated\\ThreadDiscussionMessageSlackMessageLinkArgs',
      'attachments' => 'Plain\\Generated\\ThreadDiscussionMessageAttachmentsArgs',
      'lastEditedOnSlackAt' => 'Plain\\Generated\\ThreadDiscussionMessageLastEditedOnSlackAtArgs',
      'deletedOnSlackAt' => 'Plain\\Generated\\ThreadDiscussionMessageDeletedOnSlackAtArgs',
      'reactions' => 'Plain\\Generated\\ThreadDiscussionMessageReactionsArgs',
      'createdAt' => 'Plain\\Generated\\ThreadDiscussionMessageCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadDiscussionMessageCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadDiscussionMessageUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadDiscussionMessageUpdatedByArgs',
    ),
    'WorkflowRule' => 
    array (
      'id' => 'Plain\\Generated\\WorkflowRuleIdArgs',
      'name' => 'Plain\\Generated\\WorkflowRuleNameArgs',
      'payload' => 'Plain\\Generated\\WorkflowRulePayloadArgs',
      'publishedAt' => 'Plain\\Generated\\WorkflowRulePublishedAtArgs',
      'order' => 'Plain\\Generated\\WorkflowRuleOrderArgs',
      'createdAt' => 'Plain\\Generated\\WorkflowRuleCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkflowRuleCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkflowRuleUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkflowRuleUpdatedByArgs',
    ),
    'WorkflowRuleEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkflowRuleEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkflowRuleEdgeNodeArgs',
    ),
    'WorkflowRuleConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkflowRuleConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkflowRuleConnectionPageInfoArgs',
    ),
    'ChatAppSecret' => 
    array (
      'chatAppId' => 'Plain\\Generated\\ChatAppSecretChatAppIdArgs',
      'secret' => 'Plain\\Generated\\ChatAppSecretSecretArgs',
      'createdAt' => 'Plain\\Generated\\ChatAppSecretCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ChatAppSecretCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ChatAppSecretUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ChatAppSecretUpdatedByArgs',
    ),
    'ChatAppHiddenSecret' => 
    array (
      'chatAppId' => 'Plain\\Generated\\ChatAppHiddenSecretChatAppIdArgs',
      'createdAt' => 'Plain\\Generated\\ChatAppHiddenSecretCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ChatAppHiddenSecretCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ChatAppHiddenSecretUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ChatAppHiddenSecretUpdatedByArgs',
    ),
    'ChatApp' => 
    array (
      'id' => 'Plain\\Generated\\ChatAppIdArgs',
      'name' => 'Plain\\Generated\\ChatAppNameArgs',
      'logo' => 'Plain\\Generated\\ChatAppLogoArgs',
      'createdAt' => 'Plain\\Generated\\ChatAppCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ChatAppCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ChatAppUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ChatAppUpdatedByArgs',
    ),
    'ChatAppEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ChatAppEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ChatAppEdgeNodeArgs',
    ),
    'ChatAppConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ChatAppConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ChatAppConnectionPageInfoArgs',
    ),
    'Note' => 
    array (
      'id' => 'Plain\\Generated\\NoteIdArgs',
      'text' => 'Plain\\Generated\\NoteTextArgs',
      'markdown' => 'Plain\\Generated\\NoteMarkdownArgs',
      'customer' => 'Plain\\Generated\\NoteCustomerArgs',
      'attachments' => 'Plain\\Generated\\NoteAttachmentsArgs',
      'isDeleted' => 'Plain\\Generated\\NoteIsDeletedArgs',
      'createdAt' => 'Plain\\Generated\\NoteCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\NoteCreatedByArgs',
      'deletedAt' => 'Plain\\Generated\\NoteDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\NoteDeletedByArgs',
      'updatedAt' => 'Plain\\Generated\\NoteUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\NoteUpdatedByArgs',
    ),
    'SavedThreadsViewSort' => 
    array (
      'field' => 'Plain\\Generated\\SavedThreadsViewSortFieldArgs',
      'direction' => 'Plain\\Generated\\SavedThreadsViewSortDirectionArgs',
    ),
    'SavedThreadsViewFilterThreadField' => 
    array (
      'key' => 'Plain\\Generated\\SavedThreadsViewFilterThreadFieldKeyArgs',
      'stringValue' => 'Plain\\Generated\\SavedThreadsViewFilterThreadFieldStringValueArgs',
      'booleanValue' => 'Plain\\Generated\\SavedThreadsViewFilterThreadFieldBooleanValueArgs',
    ),
    'SavedThreadsViewFilterTenantField' => 
    array (
      'externalFieldId' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldExternalFieldIdArgs',
      'stringValue' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldStringValueArgs',
      'booleanValue' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldBooleanValueArgs',
      'numberValue' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldNumberValueArgs',
      'stringArrayValue' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldStringArrayValueArgs',
      'dateValue' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldDateValueArgs',
    ),
    'ThreadsDisplayOptions' => 
    array (
      'hasStatus' => 'Plain\\Generated\\ThreadsDisplayOptionsHasStatusArgs',
      'hasCustomer' => 'Plain\\Generated\\ThreadsDisplayOptionsHasCustomerArgs',
      'hasCompany' => 'Plain\\Generated\\ThreadsDisplayOptionsHasCompanyArgs',
      'hasPreviewText' => 'Plain\\Generated\\ThreadsDisplayOptionsHasPreviewTextArgs',
      'hasTier' => 'Plain\\Generated\\ThreadsDisplayOptionsHasTierArgs',
      'hasCustomerGroups' => 'Plain\\Generated\\ThreadsDisplayOptionsHasCustomerGroupsArgs',
      'hasLabels' => 'Plain\\Generated\\ThreadsDisplayOptionsHasLabelsArgs',
      'hasLinearIssues' => 'Plain\\Generated\\ThreadsDisplayOptionsHasLinearIssuesArgs',
      'hasJiraIssues' => 'Plain\\Generated\\ThreadsDisplayOptionsHasJiraIssuesArgs',
      'hasLinkedThreads' => 'Plain\\Generated\\ThreadsDisplayOptionsHasLinkedThreadsArgs',
      'hasServiceLevelAgreements' => 'Plain\\Generated\\ThreadsDisplayOptionsHasServiceLevelAgreementsArgs',
      'hasChannels' => 'Plain\\Generated\\ThreadsDisplayOptionsHasChannelsArgs',
      'hasLastUpdated' => 'Plain\\Generated\\ThreadsDisplayOptionsHasLastUpdatedArgs',
      'hasAssignees' => 'Plain\\Generated\\ThreadsDisplayOptionsHasAssigneesArgs',
      'hasRef' => 'Plain\\Generated\\ThreadsDisplayOptionsHasRefArgs',
      'hasIssueTrackerIssues' => 'Plain\\Generated\\ThreadsDisplayOptionsHasIssueTrackerIssuesArgs',
    ),
    'SavedThreadsViewFilter' => 
    array (
      'statuses' => 'Plain\\Generated\\SavedThreadsViewFilterStatusesArgs',
      'statusDetails' => 'Plain\\Generated\\SavedThreadsViewFilterStatusDetailsArgs',
      'priorities' => 'Plain\\Generated\\SavedThreadsViewFilterPrioritiesArgs',
      'assignedToUser' => 'Plain\\Generated\\SavedThreadsViewFilterAssignedToUserArgs',
      'participants' => 'Plain\\Generated\\SavedThreadsViewFilterParticipantsArgs',
      'customerGroups' => 'Plain\\Generated\\SavedThreadsViewFilterCustomerGroupsArgs',
      'companies' => 'Plain\\Generated\\SavedThreadsViewFilterCompaniesArgs',
      'tenants' => 'Plain\\Generated\\SavedThreadsViewFilterTenantsArgs',
      'tiers' => 'Plain\\Generated\\SavedThreadsViewFilterTiersArgs',
      'labelTypeIds' => 'Plain\\Generated\\SavedThreadsViewFilterLabelTypeIdsArgs',
      'messageSource' => 'Plain\\Generated\\SavedThreadsViewFilterMessageSourceArgs',
      'supportEmailAddresses' => 'Plain\\Generated\\SavedThreadsViewFilterSupportEmailAddressesArgs',
      'slaTypes' => 'Plain\\Generated\\SavedThreadsViewFilterSlaTypesArgs',
      'slaStatuses' => 'Plain\\Generated\\SavedThreadsViewFilterSlaStatusesArgs',
      'threadFields' => 'Plain\\Generated\\SavedThreadsViewFilterThreadFieldsArgs',
      'tenantFields' => 'Plain\\Generated\\SavedThreadsViewFilterTenantFieldsArgs',
      'threadLinkGroupIds' => 'Plain\\Generated\\SavedThreadsViewFilterThreadLinkGroupIdsArgs',
      'createdAtFilter' => 'Plain\\Generated\\SavedThreadsViewFilterCreatedAtFilterArgs',
      'surveyResponse' => 'Plain\\Generated\\SavedThreadsViewFilterSurveyResponseArgs',
      'sort' => 'Plain\\Generated\\SavedThreadsViewFilterSortArgs',
      'displayOptions' => 'Plain\\Generated\\SavedThreadsViewFilterDisplayOptionsArgs',
      'groupBy' => 'Plain\\Generated\\SavedThreadsViewFilterGroupByArgs',
      'layout' => 'Plain\\Generated\\SavedThreadsViewFilterLayoutArgs',
    ),
    'SavedThreadsView' => 
    array (
      'id' => 'Plain\\Generated\\SavedThreadsViewIdArgs',
      'name' => 'Plain\\Generated\\SavedThreadsViewNameArgs',
      'icon' => 'Plain\\Generated\\SavedThreadsViewIconArgs',
      'color' => 'Plain\\Generated\\SavedThreadsViewColorArgs',
      'threadsFilter' => 'Plain\\Generated\\SavedThreadsViewThreadsFilterArgs',
      'isHidden' => 'Plain\\Generated\\SavedThreadsViewIsHiddenArgs',
      'createdAt' => 'Plain\\Generated\\SavedThreadsViewCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\SavedThreadsViewCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\SavedThreadsViewUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\SavedThreadsViewUpdatedByArgs',
    ),
    'SavedThreadsViewConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\SavedThreadsViewConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\SavedThreadsViewConnectionEdgesArgs',
    ),
    'SavedThreadsViewEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\SavedThreadsViewEdgeCursorArgs',
      'node' => 'Plain\\Generated\\SavedThreadsViewEdgeNodeArgs',
    ),
    'FavoritePage' => 
    array (
      'id' => 'Plain\\Generated\\FavoritePageIdArgs',
      'key' => 'Plain\\Generated\\FavoritePageKeyArgs',
      'createdAt' => 'Plain\\Generated\\FavoritePageCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\FavoritePageCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\FavoritePageUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\FavoritePageUpdatedByArgs',
    ),
    'FavoritePageConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\FavoritePageConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\FavoritePageConnectionEdgesArgs',
    ),
    'FavoritePageEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\FavoritePageEdgeCursorArgs',
      'node' => 'Plain\\Generated\\FavoritePageEdgeNodeArgs',
    ),
    'Snippet' => 
    array (
      'id' => 'Plain\\Generated\\SnippetIdArgs',
      'name' => 'Plain\\Generated\\SnippetNameArgs',
      'text' => 'Plain\\Generated\\SnippetTextArgs',
      'markdown' => 'Plain\\Generated\\SnippetMarkdownArgs',
      'path' => 'Plain\\Generated\\SnippetPathArgs',
      'isDeleted' => 'Plain\\Generated\\SnippetIsDeletedArgs',
      'createdAt' => 'Plain\\Generated\\SnippetCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\SnippetCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\SnippetUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\SnippetUpdatedByArgs',
      'deletedAt' => 'Plain\\Generated\\SnippetDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\SnippetDeletedByArgs',
    ),
    'EmailSignature' => 
    array (
      'text' => 'Plain\\Generated\\EmailSignatureTextArgs',
      'markdown' => 'Plain\\Generated\\EmailSignatureMarkdownArgs',
      'createdAt' => 'Plain\\Generated\\EmailSignatureCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\EmailSignatureCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\EmailSignatureUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\EmailSignatureUpdatedByArgs',
    ),
    'Chat' => 
    array (
      'id' => 'Plain\\Generated\\ChatIdArgs',
      'text' => 'Plain\\Generated\\ChatTextArgs',
      'customerReadAt' => 'Plain\\Generated\\ChatCustomerReadAtArgs',
      'attachments' => 'Plain\\Generated\\ChatAttachmentsArgs',
      'createdAt' => 'Plain\\Generated\\ChatCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ChatCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ChatUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ChatUpdatedByArgs',
    ),
    'PageInfo' => 
    array (
      'hasPreviousPage' => 'Plain\\Generated\\PageInfoHasPreviousPageArgs',
      'hasNextPage' => 'Plain\\Generated\\PageInfoHasNextPageArgs',
      'startCursor' => 'Plain\\Generated\\PageInfoStartCursorArgs',
      'endCursor' => 'Plain\\Generated\\PageInfoEndCursorArgs',
    ),
    'DateTime' => 
    array (
      'unixTimestamp' => 'Plain\\Generated\\DateTimeUnixTimestampArgs',
      'iso8601' => 'Plain\\Generated\\DateTimeIso8601Args',
    ),
    'Time' => 
    array (
      'iso8601' => 'Plain\\Generated\\TimeIso8601Args',
    ),
    'WorkspaceEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceEdgeNodeArgs',
    ),
    'WorkspaceConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceConnectionPageInfoArgs',
    ),
    'WorkspaceInviteEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceInviteEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceInviteEdgeNodeArgs',
    ),
    'WorkspaceInviteConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceInviteConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceInviteConnectionPageInfoArgs',
    ),
    'UserEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\UserEdgeCursorArgs',
      'node' => 'Plain\\Generated\\UserEdgeNodeArgs',
    ),
    'UserConnection' => 
    array (
      'edges' => 'Plain\\Generated\\UserConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\UserConnectionPageInfoArgs',
    ),
    'RoleEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\RoleEdgeCursorArgs',
      'node' => 'Plain\\Generated\\RoleEdgeNodeArgs',
    ),
    'RoleConnection' => 
    array (
      'edges' => 'Plain\\Generated\\RoleConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\RoleConnectionPageInfoArgs',
    ),
    'CustomRole' => 
    array (
      'id' => 'Plain\\Generated\\CustomRoleIdArgs',
      'name' => 'Plain\\Generated\\CustomRoleNameArgs',
      'description' => 'Plain\\Generated\\CustomRoleDescriptionArgs',
      'permissionsPreset' => 'Plain\\Generated\\CustomRolePermissionsPresetArgs',
      'scopeDefinitions' => 'Plain\\Generated\\CustomRoleScopeDefinitionsArgs',
      'createdAt' => 'Plain\\Generated\\CustomRoleCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomRoleCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomRoleUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomRoleUpdatedByArgs',
    ),
    'CustomRoleEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomRoleEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomRoleEdgeNodeArgs',
    ),
    'CustomRoleConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomRoleConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomRoleConnectionPageInfoArgs',
    ),
    'LabelTypeEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\LabelTypeEdgeCursorArgs',
      'node' => 'Plain\\Generated\\LabelTypeEdgeNodeArgs',
    ),
    'LabelTypeConnection' => 
    array (
      'edges' => 'Plain\\Generated\\LabelTypeConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\LabelTypeConnectionPageInfoArgs',
    ),
    'ThreadFieldSchemaEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadFieldSchemaEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadFieldSchemaEdgeNodeArgs',
    ),
    'ThreadFieldSchemaConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadFieldSchemaConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadFieldSchemaConnectionPageInfoArgs',
    ),
    'CustomerEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerEdgeNodeArgs',
    ),
    'CustomerConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerConnectionPageInfoArgs',
      'totalCount' => 'Plain\\Generated\\CustomerConnectionTotalCountArgs',
    ),
    'SnippetEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\SnippetEdgeCursorArgs',
      'node' => 'Plain\\Generated\\SnippetEdgeNodeArgs',
    ),
    'SnippetConnection' => 
    array (
      'edges' => 'Plain\\Generated\\SnippetConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\SnippetConnectionPageInfoArgs',
    ),
    'UserActor' => 
    array (
      'userId' => 'Plain\\Generated\\UserActorUserIdArgs',
      'user' => 'Plain\\Generated\\UserActorUserArgs',
    ),
    'CustomerActor' => 
    array (
      'customerId' => 'Plain\\Generated\\CustomerActorCustomerIdArgs',
      'customer' => 'Plain\\Generated\\CustomerActorCustomerArgs',
    ),
    'DeletedCustomerActor' => 
    array (
      'customerId' => 'Plain\\Generated\\DeletedCustomerActorCustomerIdArgs',
    ),
    'SystemActor' => 
    array (
      'systemId' => 'Plain\\Generated\\SystemActorSystemIdArgs',
    ),
    'System' => 
    array (
      'id' => 'Plain\\Generated\\SystemIdArgs',
    ),
    'MachineUserActor' => 
    array (
      'machineUserId' => 'Plain\\Generated\\MachineUserActorMachineUserIdArgs',
      'machineUser' => 'Plain\\Generated\\MachineUserActorMachineUserArgs',
    ),
    'NoteEntry' => 
    array (
      'noteId' => 'Plain\\Generated\\NoteEntryNoteIdArgs',
      'text' => 'Plain\\Generated\\NoteEntryTextArgs',
      'markdown' => 'Plain\\Generated\\NoteEntryMarkdownArgs',
      'attachments' => 'Plain\\Generated\\NoteEntryAttachmentsArgs',
    ),
    'ChatEntry' => 
    array (
      'chatId' => 'Plain\\Generated\\ChatEntryChatIdArgs',
      'text' => 'Plain\\Generated\\ChatEntryTextArgs',
      'customerReadAt' => 'Plain\\Generated\\ChatEntryCustomerReadAtArgs',
      'attachments' => 'Plain\\Generated\\ChatEntryAttachmentsArgs',
      'timelineEventId' => 'Plain\\Generated\\ChatEntryTimelineEventIdArgs',
      'title' => 'Plain\\Generated\\ChatEntryTitleArgs',
      'components' => 'Plain\\Generated\\ChatEntryComponentsArgs',
      'customerId' => 'Plain\\Generated\\ChatEntryCustomerIdArgs',
      'externalId' => 'Plain\\Generated\\ChatEntryExternalIdArgs',
    ),
    'ThreadEventEntry' => 
    array (
      'timelineEventId' => 'Plain\\Generated\\ThreadEventEntryTimelineEventIdArgs',
      'title' => 'Plain\\Generated\\ThreadEventEntryTitleArgs',
      'components' => 'Plain\\Generated\\ThreadEventEntryComponentsArgs',
      'customerId' => 'Plain\\Generated\\ThreadEventEntryCustomerIdArgs',
      'externalId' => 'Plain\\Generated\\ThreadEventEntryExternalIdArgs',
    ),
    'CustomerEventEntry' => 
    array (
      'timelineEventId' => 'Plain\\Generated\\CustomerEventEntryTimelineEventIdArgs',
      'title' => 'Plain\\Generated\\CustomerEventEntryTitleArgs',
      'components' => 'Plain\\Generated\\CustomerEventEntryComponentsArgs',
      'customerId' => 'Plain\\Generated\\CustomerEventEntryCustomerIdArgs',
      'externalId' => 'Plain\\Generated\\CustomerEventEntryExternalIdArgs',
    ),
    'SlackReaction' => 
    array (
      'name' => 'Plain\\Generated\\SlackReactionNameArgs',
      'actors' => 'Plain\\Generated\\SlackReactionActorsArgs',
      'imageUrl' => 'Plain\\Generated\\SlackReactionImageUrlArgs',
    ),
    'SlackMessageEntry' => 
    array (
      'slackMessageLink' => 'Plain\\Generated\\SlackMessageEntrySlackMessageLinkArgs',
      'slackWebMessageLink' => 'Plain\\Generated\\SlackMessageEntrySlackWebMessageLinkArgs',
      'text' => 'Plain\\Generated\\SlackMessageEntryTextArgs',
      'customerId' => 'Plain\\Generated\\SlackMessageEntryCustomerIdArgs',
      'relatedThread' => 'Plain\\Generated\\SlackMessageEntryRelatedThreadArgs',
      'attachments' => 'Plain\\Generated\\SlackMessageEntryAttachmentsArgs',
      'lastEditedOnSlackAt' => 'Plain\\Generated\\SlackMessageEntryLastEditedOnSlackAtArgs',
      'deletedOnSlackAt' => 'Plain\\Generated\\SlackMessageEntryDeletedOnSlackAtArgs',
      'reactions' => 'Plain\\Generated\\SlackMessageEntryReactionsArgs',
    ),
    'SlackMessageEntryRelatedThread' => 
    array (
      'threadId' => 'Plain\\Generated\\SlackMessageEntryRelatedThreadThreadIdArgs',
    ),
    'SlackReplyEntry' => 
    array (
      'slackMessageLink' => 'Plain\\Generated\\SlackReplyEntrySlackMessageLinkArgs',
      'slackWebMessageLink' => 'Plain\\Generated\\SlackReplyEntrySlackWebMessageLinkArgs',
      'customerId' => 'Plain\\Generated\\SlackReplyEntryCustomerIdArgs',
      'text' => 'Plain\\Generated\\SlackReplyEntryTextArgs',
      'attachments' => 'Plain\\Generated\\SlackReplyEntryAttachmentsArgs',
      'lastEditedOnSlackAt' => 'Plain\\Generated\\SlackReplyEntryLastEditedOnSlackAtArgs',
      'deletedOnSlackAt' => 'Plain\\Generated\\SlackReplyEntryDeletedOnSlackAtArgs',
      'reactions' => 'Plain\\Generated\\SlackReplyEntryReactionsArgs',
    ),
    'MSTeamsMessage' => 
    array (
      'id' => 'Plain\\Generated\\MSTeamsMessageIdArgs',
      'threadId' => 'Plain\\Generated\\MSTeamsMessageThreadIdArgs',
      'msTeamsTenantId' => 'Plain\\Generated\\MSTeamsMessageMsTeamsTenantIdArgs',
      'msTeamsConversationId' => 'Plain\\Generated\\MSTeamsMessageMsTeamsConversationIdArgs',
      'msTeamsMessageId' => 'Plain\\Generated\\MSTeamsMessageMsTeamsMessageIdArgs',
      'msTeamsTeamId' => 'Plain\\Generated\\MSTeamsMessageMsTeamsTeamIdArgs',
      'parentMessageId' => 'Plain\\Generated\\MSTeamsMessageParentMessageIdArgs',
      'msTeamsMessageLink' => 'Plain\\Generated\\MSTeamsMessageMsTeamsMessageLinkArgs',
      'text' => 'Plain\\Generated\\MSTeamsMessageTextArgs',
      'markdownContent' => 'Plain\\Generated\\MSTeamsMessageMarkdownContentArgs',
      'createdAt' => 'Plain\\Generated\\MSTeamsMessageCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\MSTeamsMessageCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\MSTeamsMessageUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\MSTeamsMessageUpdatedByArgs',
      'attachments' => 'Plain\\Generated\\MSTeamsMessageAttachmentsArgs',
      'hasUnprocessedAttachments' => 'Plain\\Generated\\MSTeamsMessageHasUnprocessedAttachmentsArgs',
      'lastEditedOnMsTeamsAt' => 'Plain\\Generated\\MSTeamsMessageLastEditedOnMsTeamsAtArgs',
      'deletedOnMsTeamsAt' => 'Plain\\Generated\\MSTeamsMessageDeletedOnMsTeamsAtArgs',
    ),
    'MSTeamsMessageEntry' => 
    array (
      'text' => 'Plain\\Generated\\MSTeamsMessageEntryTextArgs',
      'customerId' => 'Plain\\Generated\\MSTeamsMessageEntryCustomerIdArgs',
      'markdownContent' => 'Plain\\Generated\\MSTeamsMessageEntryMarkdownContentArgs',
      'msTeamsMessageId' => 'Plain\\Generated\\MSTeamsMessageEntryMsTeamsMessageIdArgs',
      'msTeamsMessageLink' => 'Plain\\Generated\\MSTeamsMessageEntryMsTeamsMessageLinkArgs',
      'attachments' => 'Plain\\Generated\\MSTeamsMessageEntryAttachmentsArgs',
      'hasUnprocessedAttachments' => 'Plain\\Generated\\MSTeamsMessageEntryHasUnprocessedAttachmentsArgs',
      'lastEditedOnMsTeamsAt' => 'Plain\\Generated\\MSTeamsMessageEntryLastEditedOnMsTeamsAtArgs',
      'deletedOnMsTeamsAt' => 'Plain\\Generated\\MSTeamsMessageEntryDeletedOnMsTeamsAtArgs',
    ),
    'DiscordMessageEntry' => 
    array (
      'customerId' => 'Plain\\Generated\\DiscordMessageEntryCustomerIdArgs',
      'discordMessageId' => 'Plain\\Generated\\DiscordMessageEntryDiscordMessageIdArgs',
      'markdownContent' => 'Plain\\Generated\\DiscordMessageEntryMarkdownContentArgs',
      'attachments' => 'Plain\\Generated\\DiscordMessageEntryAttachmentsArgs',
      'lastEditedOnDiscordAt' => 'Plain\\Generated\\DiscordMessageEntryLastEditedOnDiscordAtArgs',
      'deletedOnDiscordAt' => 'Plain\\Generated\\DiscordMessageEntryDeletedOnDiscordAtArgs',
      'discordMessageLink' => 'Plain\\Generated\\DiscordMessageEntryDiscordMessageLinkArgs',
    ),
    'ThreadDiscussionEntry' => 
    array (
      'customerId' => 'Plain\\Generated\\ThreadDiscussionEntryCustomerIdArgs',
      'threadDiscussionId' => 'Plain\\Generated\\ThreadDiscussionEntryThreadDiscussionIdArgs',
      'discussionType' => 'Plain\\Generated\\ThreadDiscussionEntryDiscussionTypeArgs',
      'emailRecipients' => 'Plain\\Generated\\ThreadDiscussionEntryEmailRecipientsArgs',
      'slackChannelName' => 'Plain\\Generated\\ThreadDiscussionEntrySlackChannelNameArgs',
      'slackMessageLink' => 'Plain\\Generated\\ThreadDiscussionEntrySlackMessageLinkArgs',
    ),
    'ThreadDiscussionResolvedEntry' => 
    array (
      'customerId' => 'Plain\\Generated\\ThreadDiscussionResolvedEntryCustomerIdArgs',
      'threadDiscussionId' => 'Plain\\Generated\\ThreadDiscussionResolvedEntryThreadDiscussionIdArgs',
      'discussionType' => 'Plain\\Generated\\ThreadDiscussionResolvedEntryDiscussionTypeArgs',
      'emailRecipients' => 'Plain\\Generated\\ThreadDiscussionResolvedEntryEmailRecipientsArgs',
      'slackChannelName' => 'Plain\\Generated\\ThreadDiscussionResolvedEntrySlackChannelNameArgs',
      'slackMessageLink' => 'Plain\\Generated\\ThreadDiscussionResolvedEntrySlackMessageLinkArgs',
      'resolvedAt' => 'Plain\\Generated\\ThreadDiscussionResolvedEntryResolvedAtArgs',
    ),
    'FileSize' => 
    array (
      'bytes' => 'Plain\\Generated\\FileSizeBytesArgs',
      'kiloBytes' => 'Plain\\Generated\\FileSizeKiloBytesArgs',
      'megaBytes' => 'Plain\\Generated\\FileSizeMegaBytesArgs',
    ),
    'Attachment' => 
    array (
      'id' => 'Plain\\Generated\\AttachmentIdArgs',
      'fileName' => 'Plain\\Generated\\AttachmentFileNameArgs',
      'fileSize' => 'Plain\\Generated\\AttachmentFileSizeArgs',
      'fileExtension' => 'Plain\\Generated\\AttachmentFileExtensionArgs',
      'fileMimeType' => 'Plain\\Generated\\AttachmentFileMimeTypeArgs',
      'type' => 'Plain\\Generated\\AttachmentTypeArgs',
      'createdAt' => 'Plain\\Generated\\AttachmentCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\AttachmentCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\AttachmentUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\AttachmentUpdatedByArgs',
    ),
    'DiscordMessage' => 
    array (
      'discordMessageId' => 'Plain\\Generated\\DiscordMessageDiscordMessageIdArgs',
      'markdownContent' => 'Plain\\Generated\\DiscordMessageMarkdownContentArgs',
      'attachments' => 'Plain\\Generated\\DiscordMessageAttachmentsArgs',
      'lastEditedOnDiscordAt' => 'Plain\\Generated\\DiscordMessageLastEditedOnDiscordAtArgs',
      'deletedOnDiscordAt' => 'Plain\\Generated\\DiscordMessageDeletedOnDiscordAtArgs',
      'discordMessageLink' => 'Plain\\Generated\\DiscordMessageDiscordMessageLinkArgs',
      'createdAt' => 'Plain\\Generated\\DiscordMessageCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\DiscordMessageCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\DiscordMessageUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\DiscordMessageUpdatedByArgs',
    ),
    'CustomerEmailActor' => 
    array (
      'customerId' => 'Plain\\Generated\\CustomerEmailActorCustomerIdArgs',
      'customer' => 'Plain\\Generated\\CustomerEmailActorCustomerArgs',
    ),
    'DeletedCustomerEmailActor' => 
    array (
      'customerId' => 'Plain\\Generated\\DeletedCustomerEmailActorCustomerIdArgs',
    ),
    'UserEmailActor' => 
    array (
      'userId' => 'Plain\\Generated\\UserEmailActorUserIdArgs',
      'user' => 'Plain\\Generated\\UserEmailActorUserArgs',
    ),
    'SupportEmailAddressEmailActor' => 
    array (
      'supportEmailAddress' => 'Plain\\Generated\\SupportEmailAddressEmailActorSupportEmailAddressArgs',
    ),
    'EmailParticipant' => 
    array (
      'name' => 'Plain\\Generated\\EmailParticipantNameArgs',
      'email' => 'Plain\\Generated\\EmailParticipantEmailArgs',
      'emailActor' => 'Plain\\Generated\\EmailParticipantEmailActorArgs',
    ),
    'EmailBounce' => 
    array (
      'bouncedAt' => 'Plain\\Generated\\EmailBounceBouncedAtArgs',
      'recipient' => 'Plain\\Generated\\EmailBounceRecipientArgs',
      'isSendRetriable' => 'Plain\\Generated\\EmailBounceIsSendRetriableArgs',
    ),
    'EmailEntry' => 
    array (
      'emailId' => 'Plain\\Generated\\EmailEntryEmailIdArgs',
      'to' => 'Plain\\Generated\\EmailEntryToArgs',
      'from' => 'Plain\\Generated\\EmailEntryFromArgs',
      'additionalRecipients' => 'Plain\\Generated\\EmailEntryAdditionalRecipientsArgs',
      'hiddenRecipients' => 'Plain\\Generated\\EmailEntryHiddenRecipientsArgs',
      'subject' => 'Plain\\Generated\\EmailEntrySubjectArgs',
      'textContent' => 'Plain\\Generated\\EmailEntryTextContentArgs',
      'hasMoreTextContent' => 'Plain\\Generated\\EmailEntryHasMoreTextContentArgs',
      'fullTextContent' => 'Plain\\Generated\\EmailEntryFullTextContentArgs',
      'markdownContent' => 'Plain\\Generated\\EmailEntryMarkdownContentArgs',
      'hasMoreMarkdownContent' => 'Plain\\Generated\\EmailEntryHasMoreMarkdownContentArgs',
      'fullMarkdownContent' => 'Plain\\Generated\\EmailEntryFullMarkdownContentArgs',
      'authenticity' => 'Plain\\Generated\\EmailEntryAuthenticityArgs',
      'sentAt' => 'Plain\\Generated\\EmailEntrySentAtArgs',
      'sendStatus' => 'Plain\\Generated\\EmailEntrySendStatusArgs',
      'receivedAt' => 'Plain\\Generated\\EmailEntryReceivedAtArgs',
      'attachments' => 'Plain\\Generated\\EmailEntryAttachmentsArgs',
      'isStartOfThread' => 'Plain\\Generated\\EmailEntryIsStartOfThreadArgs',
      'bounces' => 'Plain\\Generated\\EmailEntryBouncesArgs',
      'category' => 'Plain\\Generated\\EmailEntryCategoryArgs',
    ),
    'ComponentText' => 
    array (
      'textSize' => 'Plain\\Generated\\ComponentTextTextSizeArgs',
      'textColor' => 'Plain\\Generated\\ComponentTextTextColorArgs',
      'text' => 'Plain\\Generated\\ComponentTextTextArgs',
      'color' => 'Plain\\Generated\\ComponentTextColorArgs',
      'size' => 'Plain\\Generated\\ComponentTextSizeArgs',
    ),
    'ComponentPlainText' => 
    array (
      'plainTextSize' => 'Plain\\Generated\\ComponentPlainTextPlainTextSizeArgs',
      'plainTextColor' => 'Plain\\Generated\\ComponentPlainTextPlainTextColorArgs',
      'plainText' => 'Plain\\Generated\\ComponentPlainTextPlainTextArgs',
    ),
    'ComponentSpacer' => 
    array (
      'spacerSize' => 'Plain\\Generated\\ComponentSpacerSpacerSizeArgs',
      'size' => 'Plain\\Generated\\ComponentSpacerSizeArgs',
    ),
    'ComponentDivider' => 
    array (
      'dividerSpacingSize' => 'Plain\\Generated\\ComponentDividerDividerSpacingSizeArgs',
      'spacingSize' => 'Plain\\Generated\\ComponentDividerSpacingSizeArgs',
    ),
    'ComponentLinkButton' => 
    array (
      'linkButtonUrl' => 'Plain\\Generated\\ComponentLinkButtonLinkButtonUrlArgs',
      'linkButtonLabel' => 'Plain\\Generated\\ComponentLinkButtonLinkButtonLabelArgs',
      'url' => 'Plain\\Generated\\ComponentLinkButtonUrlArgs',
      'label' => 'Plain\\Generated\\ComponentLinkButtonLabelArgs',
    ),
    'ComponentCopyButton' => 
    array (
      'copyButtonValue' => 'Plain\\Generated\\ComponentCopyButtonCopyButtonValueArgs',
      'copyButtonTooltipLabel' => 'Plain\\Generated\\ComponentCopyButtonCopyButtonTooltipLabelArgs',
    ),
    'ComponentBadge' => 
    array (
      'badgeLabel' => 'Plain\\Generated\\ComponentBadgeBadgeLabelArgs',
      'badgeColor' => 'Plain\\Generated\\ComponentBadgeBadgeColorArgs',
    ),
    'ComponentRow' => 
    array (
      'rowMainContent' => 'Plain\\Generated\\ComponentRowRowMainContentArgs',
      'rowAsideContent' => 'Plain\\Generated\\ComponentRowRowAsideContentArgs',
    ),
    'ComponentContainer' => 
    array (
      'containerContent' => 'Plain\\Generated\\ComponentContainerContainerContentArgs',
    ),
    'CustomEntry' => 
    array (
      'externalId' => 'Plain\\Generated\\CustomEntryExternalIdArgs',
      'title' => 'Plain\\Generated\\CustomEntryTitleArgs',
      'type' => 'Plain\\Generated\\CustomEntryTypeArgs',
      'components' => 'Plain\\Generated\\CustomEntryComponentsArgs',
      'attachments' => 'Plain\\Generated\\CustomEntryAttachmentsArgs',
    ),
    'ThreadAssignmentTransitionedEntry' => 
    array (
      'previousAssignee' => 'Plain\\Generated\\ThreadAssignmentTransitionedEntryPreviousAssigneeArgs',
      'nextAssignee' => 'Plain\\Generated\\ThreadAssignmentTransitionedEntryNextAssigneeArgs',
    ),
    'ThreadAdditionalAssigneesTransitionedEntry' => 
    array (
      'previousAssignees' => 'Plain\\Generated\\ThreadAdditionalAssigneesTransitionedEntryPreviousAssigneesArgs',
      'nextAssignees' => 'Plain\\Generated\\ThreadAdditionalAssigneesTransitionedEntryNextAssigneesArgs',
    ),
    'ThreadStatusTransitionedEntry' => 
    array (
      'previousStatus' => 'Plain\\Generated\\ThreadStatusTransitionedEntryPreviousStatusArgs',
      'previousStatusDetail' => 'Plain\\Generated\\ThreadStatusTransitionedEntryPreviousStatusDetailArgs',
      'nextStatus' => 'Plain\\Generated\\ThreadStatusTransitionedEntryNextStatusArgs',
      'nextStatusDetail' => 'Plain\\Generated\\ThreadStatusTransitionedEntryNextStatusDetailArgs',
    ),
    'ThreadPriorityChangedEntry' => 
    array (
      'previousPriority' => 'Plain\\Generated\\ThreadPriorityChangedEntryPreviousPriorityArgs',
      'nextPriority' => 'Plain\\Generated\\ThreadPriorityChangedEntryNextPriorityArgs',
    ),
    'ThreadLabelsChangedEntry' => 
    array (
      'previousLabels' => 'Plain\\Generated\\ThreadLabelsChangedEntryPreviousLabelsArgs',
      'nextLabels' => 'Plain\\Generated\\ThreadLabelsChangedEntryNextLabelsArgs',
    ),
    'ServiceLevelAgreementStatusTransitionedEntry' => 
    array (
      'previousStatus' => 'Plain\\Generated\\ServiceLevelAgreementStatusTransitionedEntryPreviousStatusArgs',
      'nextStatus' => 'Plain\\Generated\\ServiceLevelAgreementStatusTransitionedEntryNextStatusArgs',
      'serviceLevelAgreement' => 'Plain\\Generated\\ServiceLevelAgreementStatusTransitionedEntryServiceLevelAgreementArgs',
    ),
    'HelpCenterAiConversationMessageEntry' => 
    array (
      'helpCenterId' => 'Plain\\Generated\\HelpCenterAiConversationMessageEntryHelpCenterIdArgs',
      'helpCenterAiConversationId' => 'Plain\\Generated\\HelpCenterAiConversationMessageEntryHelpCenterAiConversationIdArgs',
      'messageId' => 'Plain\\Generated\\HelpCenterAiConversationMessageEntryMessageIdArgs',
      'markdown' => 'Plain\\Generated\\HelpCenterAiConversationMessageEntryMarkdownArgs',
    ),
    'LinearIssueThreadLinkStateTransitionedEntry' => 
    array (
      'linearIssueId' => 'Plain\\Generated\\LinearIssueThreadLinkStateTransitionedEntryLinearIssueIdArgs',
      'previousLinearStateId' => 'Plain\\Generated\\LinearIssueThreadLinkStateTransitionedEntryPreviousLinearStateIdArgs',
      'nextLinearStateId' => 'Plain\\Generated\\LinearIssueThreadLinkStateTransitionedEntryNextLinearStateIdArgs',
    ),
    'ThreadLinkUpdatedEntry' => 
    array (
      'threadLink' => 'Plain\\Generated\\ThreadLinkUpdatedEntryThreadLinkArgs',
      'previousThreadLink' => 'Plain\\Generated\\ThreadLinkUpdatedEntryPreviousThreadLinkArgs',
    ),
    'CustomerSurveyRequestedEntry' => 
    array (
      'customerId' => 'Plain\\Generated\\CustomerSurveyRequestedEntryCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\CustomerSurveyRequestedEntryThreadIdArgs',
      'customerSurveyId' => 'Plain\\Generated\\CustomerSurveyRequestedEntryCustomerSurveyIdArgs',
      'surveyResponseId' => 'Plain\\Generated\\CustomerSurveyRequestedEntrySurveyResponseIdArgs',
      'surveyResponsePublicId' => 'Plain\\Generated\\CustomerSurveyRequestedEntrySurveyResponsePublicIdArgs',
    ),
    'TimelineEntry' => 
    array (
      'id' => 'Plain\\Generated\\TimelineEntryIdArgs',
      'customerId' => 'Plain\\Generated\\TimelineEntryCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\TimelineEntryThreadIdArgs',
      'timestamp' => 'Plain\\Generated\\TimelineEntryTimestampArgs',
      'entry' => 'Plain\\Generated\\TimelineEntryEntryArgs',
      'actor' => 'Plain\\Generated\\TimelineEntryActorArgs',
      'llmText' => 'Plain\\Generated\\TimelineEntryLlmTextArgs',
    ),
    'CustomerEvent' => 
    array (
      'id' => 'Plain\\Generated\\CustomerEventIdArgs',
      'customerId' => 'Plain\\Generated\\CustomerEventCustomerIdArgs',
      'title' => 'Plain\\Generated\\CustomerEventTitleArgs',
      'components' => 'Plain\\Generated\\CustomerEventComponentsArgs',
      'createdAt' => 'Plain\\Generated\\CustomerEventCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerEventCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerEventUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerEventUpdatedByArgs',
    ),
    'ThreadEvent' => 
    array (
      'id' => 'Plain\\Generated\\ThreadEventIdArgs',
      'customerId' => 'Plain\\Generated\\ThreadEventCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\ThreadEventThreadIdArgs',
      'title' => 'Plain\\Generated\\ThreadEventTitleArgs',
      'components' => 'Plain\\Generated\\ThreadEventComponentsArgs',
      'createdAt' => 'Plain\\Generated\\ThreadEventCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadEventCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadEventUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadEventUpdatedByArgs',
    ),
    'TimelineEntryEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TimelineEntryEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TimelineEntryEdgeNodeArgs',
    ),
    'TimelineEntryConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TimelineEntryConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TimelineEntryConnectionPageInfoArgs',
    ),
    'MachineUser' => 
    array (
      'id' => 'Plain\\Generated\\MachineUserIdArgs',
      'fullName' => 'Plain\\Generated\\MachineUserFullNameArgs',
      'publicName' => 'Plain\\Generated\\MachineUserPublicNameArgs',
      'description' => 'Plain\\Generated\\MachineUserDescriptionArgs',
      'type' => 'Plain\\Generated\\MachineUserTypeArgs',
      'avatar' => 'Plain\\Generated\\MachineUserAvatarArgs',
      'apiKey' => 'Plain\\Generated\\MachineUserApiKeyArgs',
      'apiKeys' => 'Plain\\Generated\\MachineUserApiKeysArgs',
      'createdBy' => 'Plain\\Generated\\MachineUserCreatedByArgs',
      'createdAt' => 'Plain\\Generated\\MachineUserCreatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\MachineUserUpdatedByArgs',
      'updatedAt' => 'Plain\\Generated\\MachineUserUpdatedAtArgs',
      'isDeleted' => 'Plain\\Generated\\MachineUserIsDeletedArgs',
      'deletedAt' => 'Plain\\Generated\\MachineUserDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\MachineUserDeletedByArgs',
    ),
    'MachineUserEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\MachineUserEdgeCursorArgs',
      'node' => 'Plain\\Generated\\MachineUserEdgeNodeArgs',
    ),
    'MachineUserConnection' => 
    array (
      'edges' => 'Plain\\Generated\\MachineUserConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\MachineUserConnectionPageInfoArgs',
    ),
    'ApiKey' => 
    array (
      'id' => 'Plain\\Generated\\ApiKeyIdArgs',
      'description' => 'Plain\\Generated\\ApiKeyDescriptionArgs',
      'permissions' => 'Plain\\Generated\\ApiKeyPermissionsArgs',
      'createdBy' => 'Plain\\Generated\\ApiKeyCreatedByArgs',
      'createdAt' => 'Plain\\Generated\\ApiKeyCreatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ApiKeyUpdatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ApiKeyUpdatedAtArgs',
      'isDeleted' => 'Plain\\Generated\\ApiKeyIsDeletedArgs',
      'deletedAt' => 'Plain\\Generated\\ApiKeyDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\ApiKeyDeletedByArgs',
    ),
    'ApiKeyEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ApiKeyEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ApiKeyEdgeNodeArgs',
    ),
    'ApiKeyConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ApiKeyConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ApiKeyConnectionPageInfoArgs',
    ),
    'Permissions' => 
    array (
      'permissions' => 'Plain\\Generated\\PermissionsPermissionsArgs',
    ),
    'MSTeamsChannelMember' => 
    array (
      'id' => 'Plain\\Generated\\MSTeamsChannelMemberIdArgs',
      'roles' => 'Plain\\Generated\\MSTeamsChannelMemberRolesArgs',
      'displayName' => 'Plain\\Generated\\MSTeamsChannelMemberDisplayNameArgs',
      'visibleHistoryStartDateTime' => 'Plain\\Generated\\MSTeamsChannelMemberVisibleHistoryStartDateTimeArgs',
      'userId' => 'Plain\\Generated\\MSTeamsChannelMemberUserIdArgs',
      'email' => 'Plain\\Generated\\MSTeamsChannelMemberEmailArgs',
      'tenantId' => 'Plain\\Generated\\MSTeamsChannelMemberTenantIdArgs',
    ),
    'MSTeamsChannelMembers' => 
    array (
      'members' => 'Plain\\Generated\\MSTeamsChannelMembersMembersArgs',
    ),
    'WorkspaceMSTeamsInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\WorkspaceMSTeamsInstallationInfoInstallationUrlArgs',
    ),
    'UserMSTeamsInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\UserMSTeamsInstallationInfoInstallationUrlArgs',
    ),
    'UserMSTeamsIntegration' => 
    array (
      'id' => 'Plain\\Generated\\UserMSTeamsIntegrationIdArgs',
      'msTeamsTenantId' => 'Plain\\Generated\\UserMSTeamsIntegrationMsTeamsTenantIdArgs',
      'isReinstallRequired' => 'Plain\\Generated\\UserMSTeamsIntegrationIsReinstallRequiredArgs',
      'msTeamsPreferredUsername' => 'Plain\\Generated\\UserMSTeamsIntegrationMsTeamsPreferredUsernameArgs',
      'createdAt' => 'Plain\\Generated\\UserMSTeamsIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserMSTeamsIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserMSTeamsIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserMSTeamsIntegrationUpdatedByArgs',
    ),
    'UserSlackInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\UserSlackInstallationInfoInstallationUrlArgs',
    ),
    'WorkspaceSlackInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\WorkspaceSlackInstallationInfoInstallationUrlArgs',
    ),
    'WorkspaceSlackChannelInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\WorkspaceSlackChannelInstallationInfoInstallationUrlArgs',
    ),
    'UserAuthSlackInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\UserAuthSlackInstallationInfoInstallationUrlArgs',
    ),
    'UserSlackIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\UserSlackIntegrationIntegrationIdArgs',
      'slackTeamName' => 'Plain\\Generated\\UserSlackIntegrationSlackTeamNameArgs',
      'isReinstallRequired' => 'Plain\\Generated\\UserSlackIntegrationIsReinstallRequiredArgs',
      'createdAt' => 'Plain\\Generated\\UserSlackIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserSlackIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserSlackIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserSlackIntegrationUpdatedByArgs',
    ),
    'UserAuthSlackIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\UserAuthSlackIntegrationIntegrationIdArgs',
      'slackTeamId' => 'Plain\\Generated\\UserAuthSlackIntegrationSlackTeamIdArgs',
      'slackTeamName' => 'Plain\\Generated\\UserAuthSlackIntegrationSlackTeamNameArgs',
      'isReinstallRequired' => 'Plain\\Generated\\UserAuthSlackIntegrationIsReinstallRequiredArgs',
      'createdAt' => 'Plain\\Generated\\UserAuthSlackIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserAuthSlackIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserAuthSlackIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserAuthSlackIntegrationUpdatedByArgs',
    ),
    'WorkspaceSlackIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\WorkspaceSlackIntegrationIntegrationIdArgs',
      'slackChannelName' => 'Plain\\Generated\\WorkspaceSlackIntegrationSlackChannelNameArgs',
      'slackTeamId' => 'Plain\\Generated\\WorkspaceSlackIntegrationSlackTeamIdArgs',
      'slackTeamName' => 'Plain\\Generated\\WorkspaceSlackIntegrationSlackTeamNameArgs',
      'slackTeamImageUrl68px' => 'Plain\\Generated\\WorkspaceSlackIntegrationSlackTeamImageUrl68pxArgs',
      'isReinstallRequired' => 'Plain\\Generated\\WorkspaceSlackIntegrationIsReinstallRequiredArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceSlackIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceSlackIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceSlackIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceSlackIntegrationUpdatedByArgs',
    ),
    'WorkspaceSlackIntegrationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceSlackIntegrationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceSlackIntegrationEdgeNodeArgs',
    ),
    'WorkspaceSlackIntegrationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceSlackIntegrationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceSlackIntegrationConnectionPageInfoArgs',
    ),
    'WorkspaceSlackChannelIntegrationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationEdgeNodeArgs',
    ),
    'WorkspaceSlackChannelIntegrationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationConnectionPageInfoArgs',
    ),
    'WorkspaceSlackChannelIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationIntegrationIdArgs',
      'slackTeamId' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationSlackTeamIdArgs',
      'slackTeamName' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationSlackTeamNameArgs',
      'slackTeamImageUrl68px' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationSlackTeamImageUrl68pxArgs',
      'isReinstallRequired' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationIsReinstallRequiredArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceSlackChannelIntegrationUpdatedByArgs',
    ),
    'WorkspaceDiscordChannelIntegration' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationIdArgs',
      'discordGuildId' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationDiscordGuildIdArgs',
      'discordGuildName' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationDiscordGuildNameArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationUpdatedByArgs',
    ),
    'WorkspaceDiscordChannelInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\WorkspaceDiscordChannelInstallationInfoInstallationUrlArgs',
    ),
    'WorkspaceDiscordIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\WorkspaceDiscordIntegrationIntegrationIdArgs',
      'name' => 'Plain\\Generated\\WorkspaceDiscordIntegrationNameArgs',
      'webhookUrl' => 'Plain\\Generated\\WorkspaceDiscordIntegrationWebhookUrlArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceDiscordIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceDiscordIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceDiscordIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceDiscordIntegrationUpdatedByArgs',
    ),
    'WorkspaceDiscordChannelIntegrationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationEdgeNodeArgs',
    ),
    'WorkspaceDiscordChannelIntegrationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceDiscordChannelIntegrationConnectionPageInfoArgs',
    ),
    'UserAuthDiscordChannelInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\UserAuthDiscordChannelInstallationInfoInstallationUrlArgs',
    ),
    'WorkspaceDiscordIntegrationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WorkspaceDiscordIntegrationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WorkspaceDiscordIntegrationEdgeNodeArgs',
    ),
    'WorkspaceDiscordIntegrationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WorkspaceDiscordIntegrationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WorkspaceDiscordIntegrationConnectionPageInfoArgs',
    ),
    'UserLinearInstallationInfo' => 
    array (
      'installationUrl' => 'Plain\\Generated\\UserLinearInstallationInfoInstallationUrlArgs',
    ),
    'LinearIntegrationToken' => 
    array (
      'token' => 'Plain\\Generated\\LinearIntegrationTokenTokenArgs',
    ),
    'JiraIntegrationToken' => 
    array (
      'token' => 'Plain\\Generated\\JiraIntegrationTokenTokenArgs',
      'createdAt' => 'Plain\\Generated\\JiraIntegrationTokenCreatedAtArgs',
    ),
    'UserLinearIntegration' => 
    array (
      'integrationId' => 'Plain\\Generated\\UserLinearIntegrationIntegrationIdArgs',
      'linearOrganisationName' => 'Plain\\Generated\\UserLinearIntegrationLinearOrganisationNameArgs',
      'linearOrganisationId' => 'Plain\\Generated\\UserLinearIntegrationLinearOrganisationIdArgs',
      'createdAt' => 'Plain\\Generated\\UserLinearIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserLinearIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserLinearIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserLinearIntegrationUpdatedByArgs',
    ),
    'GithubUserAuthIntegration' => 
    array (
      'id' => 'Plain\\Generated\\GithubUserAuthIntegrationIdArgs',
      'githubUsername' => 'Plain\\Generated\\GithubUserAuthIntegrationGithubUsernameArgs',
      'createdAt' => 'Plain\\Generated\\GithubUserAuthIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\GithubUserAuthIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\GithubUserAuthIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\GithubUserAuthIntegrationUpdatedByArgs',
    ),
    'WorkspaceCursorIntegration' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceCursorIntegrationIdArgs',
      'token' => 'Plain\\Generated\\WorkspaceCursorIntegrationTokenArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceCursorIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceCursorIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceCursorIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceCursorIntegrationUpdatedByArgs',
    ),
    'CursorRepository' => 
    array (
      'owner' => 'Plain\\Generated\\CursorRepositoryOwnerArgs',
      'name' => 'Plain\\Generated\\CursorRepositoryNameArgs',
      'repository' => 'Plain\\Generated\\CursorRepositoryRepositoryArgs',
    ),
    'CustomerCardConfigApiHeader' => 
    array (
      'name' => 'Plain\\Generated\\CustomerCardConfigApiHeaderNameArgs',
      'value' => 'Plain\\Generated\\CustomerCardConfigApiHeaderValueArgs',
    ),
    'CustomerCardConfig' => 
    array (
      'id' => 'Plain\\Generated\\CustomerCardConfigIdArgs',
      'order' => 'Plain\\Generated\\CustomerCardConfigOrderArgs',
      'title' => 'Plain\\Generated\\CustomerCardConfigTitleArgs',
      'key' => 'Plain\\Generated\\CustomerCardConfigKeyArgs',
      'defaultTimeToLiveSeconds' => 'Plain\\Generated\\CustomerCardConfigDefaultTimeToLiveSecondsArgs',
      'apiUrl' => 'Plain\\Generated\\CustomerCardConfigApiUrlArgs',
      'apiHeaders' => 'Plain\\Generated\\CustomerCardConfigApiHeadersArgs',
      'isEnabled' => 'Plain\\Generated\\CustomerCardConfigIsEnabledArgs',
      'createdAt' => 'Plain\\Generated\\CustomerCardConfigCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerCardConfigCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerCardConfigUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerCardConfigUpdatedByArgs',
    ),
    'SettingScope' => 
    array (
      'id' => 'Plain\\Generated\\SettingScopeIdArgs',
      'scopeType' => 'Plain\\Generated\\SettingScopeScopeTypeArgs',
    ),
    'BooleanSetting' => 
    array (
      'code' => 'Plain\\Generated\\BooleanSettingCodeArgs',
      'booleanValue' => 'Plain\\Generated\\BooleanSettingBooleanValueArgs',
      'scope' => 'Plain\\Generated\\BooleanSettingScopeArgs',
    ),
    'StringSetting' => 
    array (
      'code' => 'Plain\\Generated\\StringSettingCodeArgs',
      'stringValue' => 'Plain\\Generated\\StringSettingStringValueArgs',
      'scope' => 'Plain\\Generated\\StringSettingScopeArgs',
    ),
    'NumberSetting' => 
    array (
      'code' => 'Plain\\Generated\\NumberSettingCodeArgs',
      'numberValue' => 'Plain\\Generated\\NumberSettingNumberValueArgs',
      'scope' => 'Plain\\Generated\\NumberSettingScopeArgs',
    ),
    'StringArraySetting' => 
    array (
      'code' => 'Plain\\Generated\\StringArraySettingCodeArgs',
      'stringArrayValue' => 'Plain\\Generated\\StringArraySettingStringArrayValueArgs',
      'scope' => 'Plain\\Generated\\StringArraySettingScopeArgs',
    ),
    'CustomerSearchEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerSearchEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerSearchEdgeNodeArgs',
    ),
    'CustomerSearchConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerSearchConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerSearchConnectionPageInfoArgs',
      'id' => 'Plain\\Generated\\CustomerSearchConnectionIdArgs',
      'customerId' => 'Plain\\Generated\\CustomerSearchConnectionCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\CustomerSearchConnectionThreadIdArgs',
      'customerCardConfig' => 'Plain\\Generated\\CustomerSearchConnectionCustomerCardConfigArgs',
      'createdAt' => 'Plain\\Generated\\CustomerSearchConnectionCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerSearchConnectionCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerSearchConnectionUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerSearchConnectionUpdatedByArgs',
    ),
    'CustomerCardInstanceLoading' => 
    array (
      'id' => 'Plain\\Generated\\CustomerCardInstanceLoadingIdArgs',
      'customerId' => 'Plain\\Generated\\CustomerCardInstanceLoadingCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\CustomerCardInstanceLoadingThreadIdArgs',
      'customerCardConfig' => 'Plain\\Generated\\CustomerCardInstanceLoadingCustomerCardConfigArgs',
      'createdAt' => 'Plain\\Generated\\CustomerCardInstanceLoadingCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerCardInstanceLoadingCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerCardInstanceLoadingUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerCardInstanceLoadingUpdatedByArgs',
    ),
    'CustomerCardInstanceLoaded' => 
    array (
      'id' => 'Plain\\Generated\\CustomerCardInstanceLoadedIdArgs',
      'customerId' => 'Plain\\Generated\\CustomerCardInstanceLoadedCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\CustomerCardInstanceLoadedThreadIdArgs',
      'customerCardConfig' => 'Plain\\Generated\\CustomerCardInstanceLoadedCustomerCardConfigArgs',
      'components' => 'Plain\\Generated\\CustomerCardInstanceLoadedComponentsArgs',
      'loadedAt' => 'Plain\\Generated\\CustomerCardInstanceLoadedLoadedAtArgs',
      'expiresAt' => 'Plain\\Generated\\CustomerCardInstanceLoadedExpiresAtArgs',
      'createdAt' => 'Plain\\Generated\\CustomerCardInstanceLoadedCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerCardInstanceLoadedCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerCardInstanceLoadedUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerCardInstanceLoadedUpdatedByArgs',
    ),
    'CustomerCardInstanceMissingCardErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceMissingCardErrorDetailMessageArgs',
      'cardKey' => 'Plain\\Generated\\CustomerCardInstanceMissingCardErrorDetailCardKeyArgs',
    ),
    'CustomerCardInstanceResponseBodyErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceResponseBodyErrorDetailMessageArgs',
      'responseBody' => 'Plain\\Generated\\CustomerCardInstanceResponseBodyErrorDetailResponseBodyArgs',
    ),
    'CustomerCardInstanceStatusCodeErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceStatusCodeErrorDetailMessageArgs',
      'statusCode' => 'Plain\\Generated\\CustomerCardInstanceStatusCodeErrorDetailStatusCodeArgs',
      'responseBody' => 'Plain\\Generated\\CustomerCardInstanceStatusCodeErrorDetailResponseBodyArgs',
    ),
    'CustomerCardInstanceRequestErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceRequestErrorDetailMessageArgs',
      'errorCode' => 'Plain\\Generated\\CustomerCardInstanceRequestErrorDetailErrorCodeArgs',
    ),
    'CustomerCardInstanceUnknownErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceUnknownErrorDetailMessageArgs',
    ),
    'CustomerCardInstanceTimeoutErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceTimeoutErrorDetailMessageArgs',
      'timeoutSeconds' => 'Plain\\Generated\\CustomerCardInstanceTimeoutErrorDetailTimeoutSecondsArgs',
    ),
    'CustomerCardInstanceCardTooBigErrorDetail' => 
    array (
      'message' => 'Plain\\Generated\\CustomerCardInstanceCardTooBigErrorDetailMessageArgs',
      'cardKey' => 'Plain\\Generated\\CustomerCardInstanceCardTooBigErrorDetailCardKeyArgs',
      'sizeBytes' => 'Plain\\Generated\\CustomerCardInstanceCardTooBigErrorDetailSizeBytesArgs',
      'maxSizeBytes' => 'Plain\\Generated\\CustomerCardInstanceCardTooBigErrorDetailMaxSizeBytesArgs',
    ),
    'CustomerCardInstanceError' => 
    array (
      'id' => 'Plain\\Generated\\CustomerCardInstanceErrorIdArgs',
      'customerId' => 'Plain\\Generated\\CustomerCardInstanceErrorCustomerIdArgs',
      'threadId' => 'Plain\\Generated\\CustomerCardInstanceErrorThreadIdArgs',
      'customerCardConfig' => 'Plain\\Generated\\CustomerCardInstanceErrorCustomerCardConfigArgs',
      'errorDetail' => 'Plain\\Generated\\CustomerCardInstanceErrorErrorDetailArgs',
      'createdAt' => 'Plain\\Generated\\CustomerCardInstanceErrorCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerCardInstanceErrorCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerCardInstanceErrorUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerCardInstanceErrorUpdatedByArgs',
    ),
    'Query' => 
    array (
      'myUserAccount' => 'Plain\\Generated\\QueryMyUserAccountArgs',
      'myUser' => 'Plain\\Generated\\QueryMyUserArgs',
      'myMachineUser' => 'Plain\\Generated\\QueryMyMachineUserArgs',
      'myWorkspace' => 'Plain\\Generated\\QueryMyWorkspaceArgs',
      'myPermissions' => 'Plain\\Generated\\QueryMyPermissionsArgs',
      'myWorkspaces' => 'Plain\\Generated\\QueryMyWorkspacesArgs',
      'myWorkspaceInvites' => 'Plain\\Generated\\QueryMyWorkspaceInvitesArgs',
      'mySlackIntegration' => 'Plain\\Generated\\QueryMySlackIntegrationArgs',
      'mySlackInstallationInfo' => 'Plain\\Generated\\QueryMySlackInstallationInfoArgs',
      'myLinearIntegration' => 'Plain\\Generated\\QueryMyLinearIntegrationArgs',
      'myLinearInstallationInfo' => 'Plain\\Generated\\QueryMyLinearInstallationInfoArgs',
      'myLinearIntegrationToken' => 'Plain\\Generated\\QueryMyLinearIntegrationTokenArgs',
      'githubUserAuthIntegration' => 'Plain\\Generated\\QueryGithubUserAuthIntegrationArgs',
      'workspaceCursorIntegration' => 'Plain\\Generated\\QueryWorkspaceCursorIntegrationArgs',
      'cursorRepositories' => 'Plain\\Generated\\QueryCursorRepositoriesArgs',
      'myJiraIntegrationToken' => 'Plain\\Generated\\QueryMyJiraIntegrationTokenArgs',
      'myEmailSignature' => 'Plain\\Generated\\QueryMyEmailSignatureArgs',
      'myFavoritePages' => 'Plain\\Generated\\QueryMyFavoritePagesArgs',
      'billingPlans' => 'Plain\\Generated\\QueryBillingPlansArgs',
      'myBillingSubscription' => 'Plain\\Generated\\QueryMyBillingSubscriptionArgs',
      'myBillingRota' => 'Plain\\Generated\\QueryMyBillingRotaArgs',
      'myPaymentMethod' => 'Plain\\Generated\\QueryMyPaymentMethodArgs',
      'labelTypes' => 'Plain\\Generated\\QueryLabelTypesArgs',
      'labelType' => 'Plain\\Generated\\QueryLabelTypeArgs',
      'labelTypeByExternalId' => 'Plain\\Generated\\QueryLabelTypeByExternalIdArgs',
      'roles' => 'Plain\\Generated\\QueryRolesArgs',
      'customRoles' => 'Plain\\Generated\\QueryCustomRolesArgs',
      'customRole' => 'Plain\\Generated\\QueryCustomRoleArgs',
      'timelineEntries' => 'Plain\\Generated\\QueryTimelineEntriesArgs',
      'timelineEntry' => 'Plain\\Generated\\QueryTimelineEntryArgs',
      'workspace' => 'Plain\\Generated\\QueryWorkspaceArgs',
      'user' => 'Plain\\Generated\\QueryUserArgs',
      'userByEmail' => 'Plain\\Generated\\QueryUserByEmailArgs',
      'users' => 'Plain\\Generated\\QueryUsersArgs',
      'workspaceInvites' => 'Plain\\Generated\\QueryWorkspaceInvitesArgs',
      'customer' => 'Plain\\Generated\\QueryCustomerArgs',
      'customers' => 'Plain\\Generated\\QueryCustomersArgs',
      'customerByEmail' => 'Plain\\Generated\\QueryCustomerByEmailArgs',
      'customerByExternalId' => 'Plain\\Generated\\QueryCustomerByExternalIdArgs',
      'customerGroup' => 'Plain\\Generated\\QueryCustomerGroupArgs',
      'customerGroups' => 'Plain\\Generated\\QueryCustomerGroupsArgs',
      'threadFieldSchemas' => 'Plain\\Generated\\QueryThreadFieldSchemasArgs',
      'threadFieldSchema' => 'Plain\\Generated\\QueryThreadFieldSchemaArgs',
      'customerCardInstances' => 'Plain\\Generated\\QueryCustomerCardInstancesArgs',
      'searchCustomers' => 'Plain\\Generated\\QuerySearchCustomersArgs',
      'snippets' => 'Plain\\Generated\\QuerySnippetsArgs',
      'snippet' => 'Plain\\Generated\\QuerySnippetArgs',
      'workspaceEmailSettings' => 'Plain\\Generated\\QueryWorkspaceEmailSettingsArgs',
      'workspaceChatSettings' => 'Plain\\Generated\\QueryWorkspaceChatSettingsArgs',
      'machineUser' => 'Plain\\Generated\\QueryMachineUserArgs',
      'machineUsers' => 'Plain\\Generated\\QueryMachineUsersArgs',
      'permissions' => 'Plain\\Generated\\QueryPermissionsArgs',
      'workspaceMSTeamsInstallationInfo' => 'Plain\\Generated\\QueryWorkspaceMSTeamsInstallationInfoArgs',
      'workspaceMSTeamsIntegration' => 'Plain\\Generated\\QueryWorkspaceMSTeamsIntegrationArgs',
      'myMSTeamsInstallationInfo' => 'Plain\\Generated\\QueryMyMSTeamsInstallationInfoArgs',
      'myMSTeamsIntegration' => 'Plain\\Generated\\QueryMyMSTeamsIntegrationArgs',
      'connectedMSTeamsChannels' => 'Plain\\Generated\\QueryConnectedMSTeamsChannelsArgs',
      'getMSTeamsMembersForChannel' => 'Plain\\Generated\\QueryGetMSTeamsMembersForChannelArgs',
      'workspaceSlackInstallationInfo' => 'Plain\\Generated\\QueryWorkspaceSlackInstallationInfoArgs',
      'workspaceSlackIntegrations' => 'Plain\\Generated\\QueryWorkspaceSlackIntegrationsArgs',
      'workspaceSlackIntegration' => 'Plain\\Generated\\QueryWorkspaceSlackIntegrationArgs',
      'workspaceSlackChannelInstallationInfo' => 'Plain\\Generated\\QueryWorkspaceSlackChannelInstallationInfoArgs',
      'workspaceSlackChannelIntegration' => 'Plain\\Generated\\QueryWorkspaceSlackChannelIntegrationArgs',
      'workspaceSlackChannelIntegrations' => 'Plain\\Generated\\QueryWorkspaceSlackChannelIntegrationsArgs',
      'workspaceDiscordChannelInstallationInfo' => 'Plain\\Generated\\QueryWorkspaceDiscordChannelInstallationInfoArgs',
      'workspaceDiscordChannelIntegration' => 'Plain\\Generated\\QueryWorkspaceDiscordChannelIntegrationArgs',
      'workspaceDiscordChannelIntegrations' => 'Plain\\Generated\\QueryWorkspaceDiscordChannelIntegrationsArgs',
      'userAuthDiscordChannelIntegration' => 'Plain\\Generated\\QueryUserAuthDiscordChannelIntegrationArgs',
      'userAuthDiscordChannelIntegrations' => 'Plain\\Generated\\QueryUserAuthDiscordChannelIntegrationsArgs',
      'userAuthDiscordChannelInstallationInfo' => 'Plain\\Generated\\QueryUserAuthDiscordChannelInstallationInfoArgs',
      'searchThreadSlackUsers' => 'Plain\\Generated\\QuerySearchThreadSlackUsersArgs',
      'searchSlackUsers' => 'Plain\\Generated\\QuerySearchSlackUsersArgs',
      'connectedSlackChannels' => 'Plain\\Generated\\QueryConnectedSlackChannelsArgs',
      'connectedSlackChannel' => 'Plain\\Generated\\QueryConnectedSlackChannelArgs',
      'threadSlackUser' => 'Plain\\Generated\\QueryThreadSlackUserArgs',
      'slackUser' => 'Plain\\Generated\\QuerySlackUserArgs',
      'userSlackChannelMemberships' => 'Plain\\Generated\\QueryUserSlackChannelMembershipsArgs',
      'userAuthSlackIntegration' => 'Plain\\Generated\\QueryUserAuthSlackIntegrationArgs',
      'userAuthSlackIntegrationByThreadId' => 'Plain\\Generated\\QueryUserAuthSlackIntegrationByThreadIdArgs',
      'userAuthSlackInstallationInfo' => 'Plain\\Generated\\QueryUserAuthSlackInstallationInfoArgs',
      'workspaceDiscordIntegrations' => 'Plain\\Generated\\QueryWorkspaceDiscordIntegrationsArgs',
      'workspaceDiscordIntegration' => 'Plain\\Generated\\QueryWorkspaceDiscordIntegrationArgs',
      'connectedDiscordChannels' => 'Plain\\Generated\\QueryConnectedDiscordChannelsArgs',
      'customerCardConfigs' => 'Plain\\Generated\\QueryCustomerCardConfigsArgs',
      'customerCardConfig' => 'Plain\\Generated\\QueryCustomerCardConfigArgs',
      'setting' => 'Plain\\Generated\\QuerySettingArgs',
      'webhookVersions' => 'Plain\\Generated\\QueryWebhookVersionsArgs',
      'webhookTarget' => 'Plain\\Generated\\QueryWebhookTargetArgs',
      'webhookTargets' => 'Plain\\Generated\\QueryWebhookTargetsArgs',
      'subscriptionEventTypes' => 'Plain\\Generated\\QuerySubscriptionEventTypesArgs',
      'workflowRule' => 'Plain\\Generated\\QueryWorkflowRuleArgs',
      'workflowRules' => 'Plain\\Generated\\QueryWorkflowRulesArgs',
      'chatApp' => 'Plain\\Generated\\QueryChatAppArgs',
      'chatApps' => 'Plain\\Generated\\QueryChatAppsArgs',
      'chatAppSecret' => 'Plain\\Generated\\QueryChatAppSecretArgs',
      'thread' => 'Plain\\Generated\\QueryThreadArgs',
      'threadByRef' => 'Plain\\Generated\\QueryThreadByRefArgs',
      'threadByExternalId' => 'Plain\\Generated\\QueryThreadByExternalIdArgs',
      'threads' => 'Plain\\Generated\\QueryThreadsArgs',
      'searchThreads' => 'Plain\\Generated\\QuerySearchThreadsArgs',
      'autoresponder' => 'Plain\\Generated\\QueryAutoresponderArgs',
      'autoresponders' => 'Plain\\Generated\\QueryAutorespondersArgs',
      'timeSeriesMetric' => 'Plain\\Generated\\QueryTimeSeriesMetricArgs',
      'singleValueMetric' => 'Plain\\Generated\\QuerySingleValueMetricArgs',
      'heatmapMetric' => 'Plain\\Generated\\QueryHeatmapMetricArgs',
      'companies' => 'Plain\\Generated\\QueryCompaniesArgs',
      'company' => 'Plain\\Generated\\QueryCompanyArgs',
      'searchCompanies' => 'Plain\\Generated\\QuerySearchCompaniesArgs',
      'tenants' => 'Plain\\Generated\\QueryTenantsArgs',
      'tenant' => 'Plain\\Generated\\QueryTenantArgs',
      'tenantFieldSchemas' => 'Plain\\Generated\\QueryTenantFieldSchemasArgs',
      'searchTenants' => 'Plain\\Generated\\QuerySearchTenantsArgs',
      'threadDiscussion' => 'Plain\\Generated\\QueryThreadDiscussionArgs',
      'serviceAuthorization' => 'Plain\\Generated\\QueryServiceAuthorizationArgs',
      'serviceAuthorizations' => 'Plain\\Generated\\QueryServiceAuthorizationsArgs',
      'tiers' => 'Plain\\Generated\\QueryTiersArgs',
      'tier' => 'Plain\\Generated\\QueryTierArgs',
      'businessHours' => 'Plain\\Generated\\QueryBusinessHoursArgs',
      'businessHoursSlots' => 'Plain\\Generated\\QueryBusinessHoursSlotsArgs',
      'workspaceHmac' => 'Plain\\Generated\\QueryWorkspaceHmacArgs',
      'threadLinkGroups' => 'Plain\\Generated\\QueryThreadLinkGroupsArgs',
      'relatedThreads' => 'Plain\\Generated\\QueryRelatedThreadsArgs',
      'searchKnowledgeSources' => 'Plain\\Generated\\QuerySearchKnowledgeSourcesArgs',
      'threadClusters' => 'Plain\\Generated\\QueryThreadClustersArgs',
      'threadCluster' => 'Plain\\Generated\\QueryThreadClusterArgs',
      'activeThreadCluster' => 'Plain\\Generated\\QueryActiveThreadClusterArgs',
      'threadClustersPaginated' => 'Plain\\Generated\\QueryThreadClustersPaginatedArgs',
      'generatedReplies' => 'Plain\\Generated\\QueryGeneratedRepliesArgs',
      'indexedDocuments' => 'Plain\\Generated\\QueryIndexedDocumentsArgs',
      'knowledgeSource' => 'Plain\\Generated\\QueryKnowledgeSourceArgs',
      'knowledgeSources' => 'Plain\\Generated\\QueryKnowledgeSourcesArgs',
      'savedThreadsViews' => 'Plain\\Generated\\QuerySavedThreadsViewsArgs',
      'savedThreadsView' => 'Plain\\Generated\\QuerySavedThreadsViewArgs',
      'searchThreadLinkCandidates' => 'Plain\\Generated\\QuerySearchThreadLinkCandidatesArgs',
      'helpCenters' => 'Plain\\Generated\\QueryHelpCentersArgs',
      'helpCenter' => 'Plain\\Generated\\QueryHelpCenterArgs',
      'helpCenterArticle' => 'Plain\\Generated\\QueryHelpCenterArticleArgs',
      'helpCenterArticleGroup' => 'Plain\\Generated\\QueryHelpCenterArticleGroupArgs',
      'helpCenterIndex' => 'Plain\\Generated\\QueryHelpCenterIndexArgs',
      'helpCenterArticleBySlug' => 'Plain\\Generated\\QueryHelpCenterArticleBySlugArgs',
      'helpCenterArticleGroupBySlug' => 'Plain\\Generated\\QueryHelpCenterArticleGroupBySlugArgs',
      'issueTrackerFields' => 'Plain\\Generated\\QueryIssueTrackerFieldsArgs',
      'customerSurveys' => 'Plain\\Generated\\QueryCustomerSurveysArgs',
      'customerSurvey' => 'Plain\\Generated\\QueryCustomerSurveyArgs',
      'escalationPaths' => 'Plain\\Generated\\QueryEscalationPathsArgs',
      'escalationPath' => 'Plain\\Generated\\QueryEscalationPathArgs',
    ),
    'EscalationPath' => 
    array (
      'id' => 'Plain\\Generated\\EscalationPathIdArgs',
      'name' => 'Plain\\Generated\\EscalationPathNameArgs',
      'steps' => 'Plain\\Generated\\EscalationPathStepsArgs',
      'description' => 'Plain\\Generated\\EscalationPathDescriptionArgs',
      'createdAt' => 'Plain\\Generated\\EscalationPathCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\EscalationPathCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\EscalationPathUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\EscalationPathUpdatedByArgs',
    ),
    'EscalationPathStepLabelType' => 
    array (
      'id' => 'Plain\\Generated\\EscalationPathStepLabelTypeIdArgs',
      'labelType' => 'Plain\\Generated\\EscalationPathStepLabelTypeLabelTypeArgs',
    ),
    'EscalationPathStepUser' => 
    array (
      'id' => 'Plain\\Generated\\EscalationPathStepUserIdArgs',
      'user' => 'Plain\\Generated\\EscalationPathStepUserUserArgs',
    ),
    'EscalationPathEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\EscalationPathEdgeCursorArgs',
      'node' => 'Plain\\Generated\\EscalationPathEdgeNodeArgs',
    ),
    'EscalationPathConnection' => 
    array (
      'edges' => 'Plain\\Generated\\EscalationPathConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\EscalationPathConnectionPageInfoArgs',
    ),
    'IssueTrackerField' => 
    array (
      'name' => 'Plain\\Generated\\IssueTrackerFieldNameArgs',
      'key' => 'Plain\\Generated\\IssueTrackerFieldKeyArgs',
      'type' => 'Plain\\Generated\\IssueTrackerFieldTypeArgs',
      'parentFieldKey' => 'Plain\\Generated\\IssueTrackerFieldParentFieldKeyArgs',
      'options' => 'Plain\\Generated\\IssueTrackerFieldOptionsArgs',
      'selectedValue' => 'Plain\\Generated\\IssueTrackerFieldSelectedValueArgs',
      'isRequired' => 'Plain\\Generated\\IssueTrackerFieldIsRequiredArgs',
    ),
    'IssueTrackerFieldOption' => 
    array (
      'name' => 'Plain\\Generated\\IssueTrackerFieldOptionNameArgs',
      'value' => 'Plain\\Generated\\IssueTrackerFieldOptionValueArgs',
      'icon' => 'Plain\\Generated\\IssueTrackerFieldOptionIconArgs',
      'color' => 'Plain\\Generated\\IssueTrackerFieldOptionColorArgs',
    ),
    'ThreadLinkCandidateConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadLinkCandidateConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadLinkCandidateConnectionPageInfoArgs',
    ),
    'ThreadLinkCandidateEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadLinkCandidateEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadLinkCandidateEdgeNodeArgs',
    ),
    'ThreadLinkCandidate' => 
    array (
      'sourceId' => 'Plain\\Generated\\ThreadLinkCandidateSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\ThreadLinkCandidateSourceTypeArgs',
      'title' => 'Plain\\Generated\\ThreadLinkCandidateTitleArgs',
      'description' => 'Plain\\Generated\\ThreadLinkCandidateDescriptionArgs',
      'url' => 'Plain\\Generated\\ThreadLinkCandidateUrlArgs',
      'status' => 'Plain\\Generated\\ThreadLinkCandidateStatusArgs',
      'sourceStatus' => 'Plain\\Generated\\ThreadLinkCandidateSourceStatusArgs',
    ),
    'ThreadLinkSourceStatus' => 
    array (
      'key' => 'Plain\\Generated\\ThreadLinkSourceStatusKeyArgs',
      'label' => 'Plain\\Generated\\ThreadLinkSourceStatusLabelArgs',
      'color' => 'Plain\\Generated\\ThreadLinkSourceStatusColorArgs',
      'icon' => 'Plain\\Generated\\ThreadLinkSourceStatusIconArgs',
    ),
    'GeneratedReply' => 
    array (
      'id' => 'Plain\\Generated\\GeneratedReplyIdArgs',
      'markdown' => 'Plain\\Generated\\GeneratedReplyMarkdownArgs',
      'timelineEntryId' => 'Plain\\Generated\\GeneratedReplyTimelineEntryIdArgs',
      'text' => 'Plain\\Generated\\GeneratedReplyTextArgs',
      'createdAt' => 'Plain\\Generated\\GeneratedReplyCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\GeneratedReplyCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\GeneratedReplyUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\GeneratedReplyUpdatedByArgs',
    ),
    'ThreadWithDistance' => 
    array (
      'thread' => 'Plain\\Generated\\ThreadWithDistanceThreadArgs',
      'distance' => 'Plain\\Generated\\ThreadWithDistanceDistanceArgs',
    ),
    'MinimalThreadWithDistance' => 
    array (
      'threadId' => 'Plain\\Generated\\MinimalThreadWithDistanceThreadIdArgs',
      'customerId' => 'Plain\\Generated\\MinimalThreadWithDistanceCustomerIdArgs',
      'tierId' => 'Plain\\Generated\\MinimalThreadWithDistanceTierIdArgs',
      'distance' => 'Plain\\Generated\\MinimalThreadWithDistanceDistanceArgs',
    ),
    'ThreadCluster' => 
    array (
      'id' => 'Plain\\Generated\\ThreadClusterIdArgs',
      'title' => 'Plain\\Generated\\ThreadClusterTitleArgs',
      'description' => 'Plain\\Generated\\ThreadClusterDescriptionArgs',
      'category' => 'Plain\\Generated\\ThreadClusterCategoryArgs',
      'sentiment' => 'Plain\\Generated\\ThreadClusterSentimentArgs',
      'confidence' => 'Plain\\Generated\\ThreadClusterConfidenceArgs',
      'emoji' => 'Plain\\Generated\\ThreadClusterEmojiArgs',
      'createdAt' => 'Plain\\Generated\\ThreadClusterCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadClusterCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadClusterUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadClusterUpdatedByArgs',
      'threads' => 'Plain\\Generated\\ThreadClusterThreadsArgs',
    ),
    'ThreadClusterEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadClusterEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadClusterEdgeNodeArgs',
    ),
    'ThreadClusterConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadClusterConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadClusterConnectionPageInfoArgs',
    ),
    'Tier' => 
    array (
      'id' => 'Plain\\Generated\\TierIdArgs',
      'name' => 'Plain\\Generated\\TierNameArgs',
      'externalId' => 'Plain\\Generated\\TierExternalIdArgs',
      'color' => 'Plain\\Generated\\TierColorArgs',
      'isDefault' => 'Plain\\Generated\\TierIsDefaultArgs',
      'defaultPriority' => 'Plain\\Generated\\TierDefaultPriorityArgs',
      'defaultThreadPriority' => 'Plain\\Generated\\TierDefaultThreadPriorityArgs',
      'isMachineTier' => 'Plain\\Generated\\TierIsMachineTierArgs',
      'memberships' => 'Plain\\Generated\\TierMembershipsArgs',
      'serviceLevelAgreements' => 'Plain\\Generated\\TierServiceLevelAgreementsArgs',
      'createdAt' => 'Plain\\Generated\\TierCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\TierCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\TierUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\TierUpdatedByArgs',
    ),
    'TenantTierMembership' => 
    array (
      'id' => 'Plain\\Generated\\TenantTierMembershipIdArgs',
      'tierId' => 'Plain\\Generated\\TenantTierMembershipTierIdArgs',
      'tenantId' => 'Plain\\Generated\\TenantTierMembershipTenantIdArgs',
      'createdAt' => 'Plain\\Generated\\TenantTierMembershipCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\TenantTierMembershipCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\TenantTierMembershipUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\TenantTierMembershipUpdatedByArgs',
    ),
    'CompanyTierMembership' => 
    array (
      'id' => 'Plain\\Generated\\CompanyTierMembershipIdArgs',
      'tierId' => 'Plain\\Generated\\CompanyTierMembershipTierIdArgs',
      'companyId' => 'Plain\\Generated\\CompanyTierMembershipCompanyIdArgs',
      'createdAt' => 'Plain\\Generated\\CompanyTierMembershipCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CompanyTierMembershipCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CompanyTierMembershipUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CompanyTierMembershipUpdatedByArgs',
    ),
    'TierMembershipEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TierMembershipEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TierMembershipEdgeNodeArgs',
    ),
    'TierMembershipConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TierMembershipConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TierMembershipConnectionPageInfoArgs',
      'totalCount' => 'Plain\\Generated\\TierMembershipConnectionTotalCountArgs',
    ),
    'ServiceLevelAgreementThreadLabelTypeIdFilter' => 
    array (
      'labelTypeIds' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterLabelTypeIdsArgs',
      'requireAll' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterRequireAllArgs',
      'id' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterIdArgs',
      'useBusinessHoursOnly' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterUseBusinessHoursOnlyArgs',
      'threadPriorityFilter' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterThreadPriorityFilterArgs',
      'threadLabelTypeIdFilter' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterThreadLabelTypeIdFilterArgs',
      'breachActions' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterBreachActionsArgs',
      'createdAt' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterUpdatedByArgs',
    ),
    'FirstResponseTimeServiceLevelAgreement' => 
    array (
      'id' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementIdArgs',
      'firstResponseTimeMinutes' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementFirstResponseTimeMinutesArgs',
      'useBusinessHoursOnly' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementUseBusinessHoursOnlyArgs',
      'threadPriorityFilter' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementThreadPriorityFilterArgs',
      'threadLabelTypeIdFilter' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementThreadLabelTypeIdFilterArgs',
      'breachActions' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementBreachActionsArgs',
      'createdAt' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\FirstResponseTimeServiceLevelAgreementUpdatedByArgs',
    ),
    'NextResponseTimeServiceLevelAgreement' => 
    array (
      'id' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementIdArgs',
      'nextResponseTimeMinutes' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementNextResponseTimeMinutesArgs',
      'useBusinessHoursOnly' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementUseBusinessHoursOnlyArgs',
      'threadPriorityFilter' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementThreadPriorityFilterArgs',
      'threadLabelTypeIdFilter' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementThreadLabelTypeIdFilterArgs',
      'breachActions' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementBreachActionsArgs',
      'createdAt' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\NextResponseTimeServiceLevelAgreementUpdatedByArgs',
    ),
    'BeforeBreachAction' => 
    array (
      'beforeBreachMinutes' => 'Plain\\Generated\\BeforeBreachActionBeforeBreachMinutesArgs',
      'createdAt' => 'Plain\\Generated\\BeforeBreachActionCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\BeforeBreachActionCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\BeforeBreachActionUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\BeforeBreachActionUpdatedByArgs',
    ),
    'TierEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TierEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TierEdgeNodeArgs',
    ),
    'TierConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TierConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TierConnectionPageInfoArgs',
    ),
    'MetricDimension' => 
    array (
      'type' => 'Plain\\Generated\\MetricDimensionTypeArgs',
      'value' => 'Plain\\Generated\\MetricDimensionValueArgs',
    ),
    'SingleValueMetricValue' => 
    array (
      'value' => 'Plain\\Generated\\SingleValueMetricValueValueArgs',
      'dimension' => 'Plain\\Generated\\SingleValueMetricValueDimensionArgs',
      'userId' => 'Plain\\Generated\\SingleValueMetricValueUserIdArgs',
    ),
    'SingleValueMetric' => 
    array (
      'values' => 'Plain\\Generated\\SingleValueMetricValuesArgs',
    ),
    'HeatmapHour' => 
    array (
      'percentage' => 'Plain\\Generated\\HeatmapHourPercentageArgs',
      'total' => 'Plain\\Generated\\HeatmapHourTotalArgs',
      'threadIds' => 'Plain\\Generated\\HeatmapHourThreadIdsArgs',
      'messageCount' => 'Plain\\Generated\\HeatmapHourMessageCountArgs',
    ),
    'HeatmapMetric' => 
    array (
      'days' => 'Plain\\Generated\\HeatmapMetricDaysArgs',
    ),
    'TimeSeriesMetric' => 
    array (
      'timestamps' => 'Plain\\Generated\\TimeSeriesMetricTimestampsArgs',
      'series' => 'Plain\\Generated\\TimeSeriesMetricSeriesArgs',
    ),
    'TimeSeriesSeries' => 
    array (
      'values' => 'Plain\\Generated\\TimeSeriesSeriesValuesArgs',
      'userId' => 'Plain\\Generated\\TimeSeriesSeriesUserIdArgs',
      'dimension' => 'Plain\\Generated\\TimeSeriesSeriesDimensionArgs',
      'threadIds' => 'Plain\\Generated\\TimeSeriesSeriesThreadIdsArgs',
    ),
    'TimeSeriesMetricDimension' => 
    array (
      'type' => 'Plain\\Generated\\TimeSeriesMetricDimensionTypeArgs',
      'value' => 'Plain\\Generated\\TimeSeriesMetricDimensionValueArgs',
    ),
    'DatetimeFilterOutput' => 
    array (
      'after' => 'Plain\\Generated\\DatetimeFilterOutputAfterArgs',
      'before' => 'Plain\\Generated\\DatetimeFilterOutputBeforeArgs',
    ),
    'SurveyResponseFilterOutput' => 
    array (
      'hasResponse' => 'Plain\\Generated\\SurveyResponseFilterOutputHasResponseArgs',
      'sentiment' => 'Plain\\Generated\\SurveyResponseFilterOutputSentimentArgs',
      'rating' => 'Plain\\Generated\\SurveyResponseFilterOutputRatingArgs',
      'surveyId' => 'Plain\\Generated\\SurveyResponseFilterOutputSurveyIdArgs',
      'responseAt' => 'Plain\\Generated\\SurveyResponseFilterOutputResponseAtArgs',
    ),
    'ThreadConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\ThreadConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\ThreadConnectionEdgesArgs',
      'totalCount' => 'Plain\\Generated\\ThreadConnectionTotalCountArgs',
    ),
    'ThreadEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadEdgeNodeArgs',
    ),
    'MutationFieldError' => 
    array (
      'field' => 'Plain\\Generated\\MutationFieldErrorFieldArgs',
      'message' => 'Plain\\Generated\\MutationFieldErrorMessageArgs',
      'type' => 'Plain\\Generated\\MutationFieldErrorTypeArgs',
    ),
    'MutationError' => 
    array (
      'message' => 'Plain\\Generated\\MutationErrorMessageArgs',
      'type' => 'Plain\\Generated\\MutationErrorTypeArgs',
      'code' => 'Plain\\Generated\\MutationErrorCodeArgs',
      'fields' => 'Plain\\Generated\\MutationErrorFieldsArgs',
    ),
    'CreateUserAccountOutput' => 
    array (
      'userAccount' => 'Plain\\Generated\\CreateUserAccountOutputUserAccountArgs',
      'error' => 'Plain\\Generated\\CreateUserAccountOutputErrorArgs',
    ),
    'CreateWorkspaceOutput' => 
    array (
      'workspace' => 'Plain\\Generated\\CreateWorkspaceOutputWorkspaceArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceOutputErrorArgs',
    ),
    'InviteUserToWorkspaceOutput' => 
    array (
      'invite' => 'Plain\\Generated\\InviteUserToWorkspaceOutputInviteArgs',
      'error' => 'Plain\\Generated\\InviteUserToWorkspaceOutputErrorArgs',
    ),
    'AcceptWorkspaceInviteOutput' => 
    array (
      'invite' => 'Plain\\Generated\\AcceptWorkspaceInviteOutputInviteArgs',
      'error' => 'Plain\\Generated\\AcceptWorkspaceInviteOutputErrorArgs',
    ),
    'DeleteWorkspaceInviteOutput' => 
    array (
      'invite' => 'Plain\\Generated\\DeleteWorkspaceInviteOutputInviteArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceInviteOutputErrorArgs',
    ),
    'AssignRolesToUserOutput' => 
    array (
      'error' => 'Plain\\Generated\\AssignRolesToUserOutputErrorArgs',
    ),
    'CreateCustomRoleOutput' => 
    array (
      'role' => 'Plain\\Generated\\CreateCustomRoleOutputRoleArgs',
      'error' => 'Plain\\Generated\\CreateCustomRoleOutputErrorArgs',
    ),
    'UpdateCustomRoleOutput' => 
    array (
      'role' => 'Plain\\Generated\\UpdateCustomRoleOutputRoleArgs',
      'error' => 'Plain\\Generated\\UpdateCustomRoleOutputErrorArgs',
    ),
    'DeleteCustomRoleOutput' => 
    array (
      'deletedCustomRoleId' => 'Plain\\Generated\\DeleteCustomRoleOutputDeletedCustomRoleIdArgs',
      'error' => 'Plain\\Generated\\DeleteCustomRoleOutputErrorArgs',
    ),
    'UpsertRoleScopesOutput' => 
    array (
      'role' => 'Plain\\Generated\\UpsertRoleScopesOutputRoleArgs',
      'error' => 'Plain\\Generated\\UpsertRoleScopesOutputErrorArgs',
    ),
    'CreateLabelTypeOutput' => 
    array (
      'labelType' => 'Plain\\Generated\\CreateLabelTypeOutputLabelTypeArgs',
      'error' => 'Plain\\Generated\\CreateLabelTypeOutputErrorArgs',
    ),
    'ArchiveLabelTypeOutput' => 
    array (
      'labelType' => 'Plain\\Generated\\ArchiveLabelTypeOutputLabelTypeArgs',
      'error' => 'Plain\\Generated\\ArchiveLabelTypeOutputErrorArgs',
    ),
    'UnarchiveLabelTypeOutput' => 
    array (
      'labelType' => 'Plain\\Generated\\UnarchiveLabelTypeOutputLabelTypeArgs',
      'error' => 'Plain\\Generated\\UnarchiveLabelTypeOutputErrorArgs',
    ),
    'UpdateLabelTypeOutput' => 
    array (
      'labelType' => 'Plain\\Generated\\UpdateLabelTypeOutputLabelTypeArgs',
      'error' => 'Plain\\Generated\\UpdateLabelTypeOutputErrorArgs',
    ),
    'AddLabelsOutput' => 
    array (
      'labels' => 'Plain\\Generated\\AddLabelsOutputLabelsArgs',
      'thread' => 'Plain\\Generated\\AddLabelsOutputThreadArgs',
      'error' => 'Plain\\Generated\\AddLabelsOutputErrorArgs',
    ),
    'AddLabelsToUserOutput' => 
    array (
      'labels' => 'Plain\\Generated\\AddLabelsToUserOutputLabelsArgs',
      'user' => 'Plain\\Generated\\AddLabelsToUserOutputUserArgs',
      'error' => 'Plain\\Generated\\AddLabelsToUserOutputErrorArgs',
    ),
    'RemoveLabelsOutput' => 
    array (
      'thread' => 'Plain\\Generated\\RemoveLabelsOutputThreadArgs',
      'error' => 'Plain\\Generated\\RemoveLabelsOutputErrorArgs',
    ),
    'RemoveLabelsFromUserOutput' => 
    array (
      'labels' => 'Plain\\Generated\\RemoveLabelsFromUserOutputLabelsArgs',
      'user' => 'Plain\\Generated\\RemoveLabelsFromUserOutputUserArgs',
      'error' => 'Plain\\Generated\\RemoveLabelsFromUserOutputErrorArgs',
    ),
    'CreateThreadFieldSchemaOutput' => 
    array (
      'threadFieldSchema' => 'Plain\\Generated\\CreateThreadFieldSchemaOutputThreadFieldSchemaArgs',
      'error' => 'Plain\\Generated\\CreateThreadFieldSchemaOutputErrorArgs',
    ),
    'UpdateThreadFieldSchemaOutput' => 
    array (
      'threadFieldSchema' => 'Plain\\Generated\\UpdateThreadFieldSchemaOutputThreadFieldSchemaArgs',
      'error' => 'Plain\\Generated\\UpdateThreadFieldSchemaOutputErrorArgs',
    ),
    'DeleteThreadFieldSchemaOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteThreadFieldSchemaOutputErrorArgs',
    ),
    'DeleteEscalationPathOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteEscalationPathOutputErrorArgs',
    ),
    'CreateEscalationPathOutput' => 
    array (
      'escalationPath' => 'Plain\\Generated\\CreateEscalationPathOutputEscalationPathArgs',
      'error' => 'Plain\\Generated\\CreateEscalationPathOutputErrorArgs',
    ),
    'UpdateEscalationPathOutput' => 
    array (
      'escalationPath' => 'Plain\\Generated\\UpdateEscalationPathOutputEscalationPathArgs',
      'error' => 'Plain\\Generated\\UpdateEscalationPathOutputErrorArgs',
    ),
    'ReorderThreadFieldSchemasOutput' => 
    array (
      'threadFieldSchemas' => 'Plain\\Generated\\ReorderThreadFieldSchemasOutputThreadFieldSchemasArgs',
      'error' => 'Plain\\Generated\\ReorderThreadFieldSchemasOutputErrorArgs',
    ),
    'UpsertThreadFieldOutput' => 
    array (
      'threadField' => 'Plain\\Generated\\UpsertThreadFieldOutputThreadFieldArgs',
      'result' => 'Plain\\Generated\\UpsertThreadFieldOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertThreadFieldOutputErrorArgs',
    ),
    'BulkUpsertThreadFieldResult' => 
    array (
      'threadField' => 'Plain\\Generated\\BulkUpsertThreadFieldResultThreadFieldArgs',
      'result' => 'Plain\\Generated\\BulkUpsertThreadFieldResultResultArgs',
    ),
    'BulkUpsertThreadFieldsOutput' => 
    array (
      'results' => 'Plain\\Generated\\BulkUpsertThreadFieldsOutputResultsArgs',
      'error' => 'Plain\\Generated\\BulkUpsertThreadFieldsOutputErrorArgs',
    ),
    'DeleteThreadFieldOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteThreadFieldOutputErrorArgs',
    ),
    'CreateWorkflowRuleOutput' => 
    array (
      'workflowRule' => 'Plain\\Generated\\CreateWorkflowRuleOutputWorkflowRuleArgs',
      'error' => 'Plain\\Generated\\CreateWorkflowRuleOutputErrorArgs',
    ),
    'UpdateWorkflowRuleOutput' => 
    array (
      'workflowRule' => 'Plain\\Generated\\UpdateWorkflowRuleOutputWorkflowRuleArgs',
      'error' => 'Plain\\Generated\\UpdateWorkflowRuleOutputErrorArgs',
    ),
    'ToggleWorkflowRulePublishedOutput' => 
    array (
      'workflowRule' => 'Plain\\Generated\\ToggleWorkflowRulePublishedOutputWorkflowRuleArgs',
      'error' => 'Plain\\Generated\\ToggleWorkflowRulePublishedOutputErrorArgs',
    ),
    'DeleteWorkflowRuleOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteWorkflowRuleOutputErrorArgs',
    ),
    'TriggerWorkflowRuleOutput' => 
    array (
      'error' => 'Plain\\Generated\\TriggerWorkflowRuleOutputErrorArgs',
    ),
    'CreateChatAppOutput' => 
    array (
      'chatApp' => 'Plain\\Generated\\CreateChatAppOutputChatAppArgs',
      'error' => 'Plain\\Generated\\CreateChatAppOutputErrorArgs',
    ),
    'UpdateChatAppOutput' => 
    array (
      'chatApp' => 'Plain\\Generated\\UpdateChatAppOutputChatAppArgs',
      'error' => 'Plain\\Generated\\UpdateChatAppOutputErrorArgs',
    ),
    'DeleteChatAppOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteChatAppOutputErrorArgs',
    ),
    'CreateChatAppSecretOutput' => 
    array (
      'chatAppSecret' => 'Plain\\Generated\\CreateChatAppSecretOutputChatAppSecretArgs',
      'error' => 'Plain\\Generated\\CreateChatAppSecretOutputErrorArgs',
    ),
    'DeleteChatAppSecretOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteChatAppSecretOutputErrorArgs',
      'id' => 'Plain\\Generated\\DeleteChatAppSecretOutputIdArgs',
      'threadId' => 'Plain\\Generated\\DeleteChatAppSecretOutputThreadIdArgs',
      'sourceId' => 'Plain\\Generated\\DeleteChatAppSecretOutputSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\DeleteChatAppSecretOutputSourceTypeArgs',
      'title' => 'Plain\\Generated\\DeleteChatAppSecretOutputTitleArgs',
      'description' => 'Plain\\Generated\\DeleteChatAppSecretOutputDescriptionArgs',
      'url' => 'Plain\\Generated\\DeleteChatAppSecretOutputUrlArgs',
      'status' => 'Plain\\Generated\\DeleteChatAppSecretOutputStatusArgs',
      'createdAt' => 'Plain\\Generated\\DeleteChatAppSecretOutputCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\DeleteChatAppSecretOutputCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\DeleteChatAppSecretOutputUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\DeleteChatAppSecretOutputUpdatedByArgs',
    ),
    'LinearIssueState' => 
    array (
      'type' => 'Plain\\Generated\\LinearIssueStateTypeArgs',
      'label' => 'Plain\\Generated\\LinearIssueStateLabelArgs',
      'color' => 'Plain\\Generated\\LinearIssueStateColorArgs',
    ),
    'LinearIssueThreadLink' => 
    array (
      'id' => 'Plain\\Generated\\LinearIssueThreadLinkIdArgs',
      'title' => 'Plain\\Generated\\LinearIssueThreadLinkTitleArgs',
      'description' => 'Plain\\Generated\\LinearIssueThreadLinkDescriptionArgs',
      'url' => 'Plain\\Generated\\LinearIssueThreadLinkUrlArgs',
      'status' => 'Plain\\Generated\\LinearIssueThreadLinkStatusArgs',
      'threadId' => 'Plain\\Generated\\LinearIssueThreadLinkThreadIdArgs',
      'sourceId' => 'Plain\\Generated\\LinearIssueThreadLinkSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\LinearIssueThreadLinkSourceTypeArgs',
      'createdAt' => 'Plain\\Generated\\LinearIssueThreadLinkCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\LinearIssueThreadLinkCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\LinearIssueThreadLinkUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\LinearIssueThreadLinkUpdatedByArgs',
      'linearIssueId' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueIdArgs',
      'linearIssueIdentifier' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueIdentifierArgs',
      'linearIssueState' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueStateArgs',
      'linearIssueCreatedAt' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueCreatedAtArgs',
      'linearIssueUpdatedAt' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueUpdatedAtArgs',
      'linearIssueUrl' => 'Plain\\Generated\\LinearIssueThreadLinkLinearIssueUrlArgs',
    ),
    'JiraIssueType' => 
    array (
      'name' => 'Plain\\Generated\\JiraIssueTypeNameArgs',
      'iconUrl' => 'Plain\\Generated\\JiraIssueTypeIconUrlArgs',
    ),
    'JiraIssueThreadLink' => 
    array (
      'id' => 'Plain\\Generated\\JiraIssueThreadLinkIdArgs',
      'title' => 'Plain\\Generated\\JiraIssueThreadLinkTitleArgs',
      'description' => 'Plain\\Generated\\JiraIssueThreadLinkDescriptionArgs',
      'url' => 'Plain\\Generated\\JiraIssueThreadLinkUrlArgs',
      'status' => 'Plain\\Generated\\JiraIssueThreadLinkStatusArgs',
      'threadId' => 'Plain\\Generated\\JiraIssueThreadLinkThreadIdArgs',
      'sourceId' => 'Plain\\Generated\\JiraIssueThreadLinkSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\JiraIssueThreadLinkSourceTypeArgs',
      'createdAt' => 'Plain\\Generated\\JiraIssueThreadLinkCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\JiraIssueThreadLinkCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\JiraIssueThreadLinkUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\JiraIssueThreadLinkUpdatedByArgs',
      'jiraIssueId' => 'Plain\\Generated\\JiraIssueThreadLinkJiraIssueIdArgs',
      'jiraIssueKey' => 'Plain\\Generated\\JiraIssueThreadLinkJiraIssueKeyArgs',
      'jiraIssueType' => 'Plain\\Generated\\JiraIssueThreadLinkJiraIssueTypeArgs',
    ),
    'PlainThreadThreadLink' => 
    array (
      'id' => 'Plain\\Generated\\PlainThreadThreadLinkIdArgs',
      'title' => 'Plain\\Generated\\PlainThreadThreadLinkTitleArgs',
      'description' => 'Plain\\Generated\\PlainThreadThreadLinkDescriptionArgs',
      'url' => 'Plain\\Generated\\PlainThreadThreadLinkUrlArgs',
      'status' => 'Plain\\Generated\\PlainThreadThreadLinkStatusArgs',
      'threadId' => 'Plain\\Generated\\PlainThreadThreadLinkThreadIdArgs',
      'sourceId' => 'Plain\\Generated\\PlainThreadThreadLinkSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\PlainThreadThreadLinkSourceTypeArgs',
      'createdAt' => 'Plain\\Generated\\PlainThreadThreadLinkCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\PlainThreadThreadLinkCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\PlainThreadThreadLinkUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\PlainThreadThreadLinkUpdatedByArgs',
      'plainThreadId' => 'Plain\\Generated\\PlainThreadThreadLinkPlainThreadIdArgs',
      'plainThreadStatusDetailType' => 'Plain\\Generated\\PlainThreadThreadLinkPlainThreadStatusDetailTypeArgs',
    ),
    'GenericThreadLink' => 
    array (
      'id' => 'Plain\\Generated\\GenericThreadLinkIdArgs',
      'title' => 'Plain\\Generated\\GenericThreadLinkTitleArgs',
      'description' => 'Plain\\Generated\\GenericThreadLinkDescriptionArgs',
      'url' => 'Plain\\Generated\\GenericThreadLinkUrlArgs',
      'status' => 'Plain\\Generated\\GenericThreadLinkStatusArgs',
      'threadId' => 'Plain\\Generated\\GenericThreadLinkThreadIdArgs',
      'sourceId' => 'Plain\\Generated\\GenericThreadLinkSourceIdArgs',
      'sourceType' => 'Plain\\Generated\\GenericThreadLinkSourceTypeArgs',
      'sourceStatus' => 'Plain\\Generated\\GenericThreadLinkSourceStatusArgs',
      'createdAt' => 'Plain\\Generated\\GenericThreadLinkCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\GenericThreadLinkCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\GenericThreadLinkUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\GenericThreadLinkUpdatedByArgs',
    ),
    'CreateThreadLinkOutput' => 
    array (
      'threadLink' => 'Plain\\Generated\\CreateThreadLinkOutputThreadLinkArgs',
      'error' => 'Plain\\Generated\\CreateThreadLinkOutputErrorArgs',
    ),
    'DeleteThreadLinkOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteThreadLinkOutputErrorArgs',
    ),
    'ThreadLinkEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadLinkEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadLinkEdgeNodeArgs',
    ),
    'ThreadLinkConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadLinkConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadLinkConnectionPageInfoArgs',
      'totalCount' => 'Plain\\Generated\\ThreadLinkConnectionTotalCountArgs',
    ),
    'ThreadLinkGroupAggregateMetrics' => 
    array (
      'totalCount' => 'Plain\\Generated\\ThreadLinkGroupAggregateMetricsTotalCountArgs',
    ),
    'ThreadLinkGroupSingleTierMetrics' => 
    array (
      'tier' => 'Plain\\Generated\\ThreadLinkGroupSingleTierMetricsTierArgs',
      'metrics' => 'Plain\\Generated\\ThreadLinkGroupSingleTierMetricsMetricsArgs',
    ),
    'ThreadLinkGroupSingleCompanyMetrics' => 
    array (
      'company' => 'Plain\\Generated\\ThreadLinkGroupSingleCompanyMetricsCompanyArgs',
      'metrics' => 'Plain\\Generated\\ThreadLinkGroupSingleCompanyMetricsMetricsArgs',
    ),
    'ThreadLinkGroupTierMetrics' => 
    array (
      'byTier' => 'Plain\\Generated\\ThreadLinkGroupTierMetricsByTierArgs',
      'noTier' => 'Plain\\Generated\\ThreadLinkGroupTierMetricsNoTierArgs',
    ),
    'ThreadLinkGroupCompanyMetrics' => 
    array (
      'byCompany' => 'Plain\\Generated\\ThreadLinkGroupCompanyMetricsByCompanyArgs',
      'noCompany' => 'Plain\\Generated\\ThreadLinkGroupCompanyMetricsNoCompanyArgs',
    ),
    'ThreadLinkGroup' => 
    array (
      'id' => 'Plain\\Generated\\ThreadLinkGroupIdArgs',
      'threads' => 'Plain\\Generated\\ThreadLinkGroupThreadsArgs',
      'threadLinks' => 'Plain\\Generated\\ThreadLinkGroupThreadLinksArgs',
      'tierMetrics' => 'Plain\\Generated\\ThreadLinkGroupTierMetricsArgs',
      'companyMetrics' => 'Plain\\Generated\\ThreadLinkGroupCompanyMetricsArgs',
      'defaultViewRank' => 'Plain\\Generated\\ThreadLinkGroupDefaultViewRankArgs',
      'currentViewRank' => 'Plain\\Generated\\ThreadLinkGroupCurrentViewRankArgs',
    ),
    'ThreadLinkGroupEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadLinkGroupEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadLinkGroupEdgeNodeArgs',
    ),
    'ThreadLinkGroupConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadLinkGroupConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadLinkGroupConnectionPageInfoArgs',
    ),
    'CreateNoteOutput' => 
    array (
      'note' => 'Plain\\Generated\\CreateNoteOutputNoteArgs',
      'error' => 'Plain\\Generated\\CreateNoteOutputErrorArgs',
    ),
    'DeleteNoteOutput' => 
    array (
      'note' => 'Plain\\Generated\\DeleteNoteOutputNoteArgs',
      'error' => 'Plain\\Generated\\DeleteNoteOutputErrorArgs',
    ),
    'CreateSavedThreadsViewOutput' => 
    array (
      'savedThreadsView' => 'Plain\\Generated\\CreateSavedThreadsViewOutputSavedThreadsViewArgs',
      'error' => 'Plain\\Generated\\CreateSavedThreadsViewOutputErrorArgs',
    ),
    'DeleteSavedThreadsViewOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteSavedThreadsViewOutputErrorArgs',
    ),
    'UpdateSavedThreadsViewOutput' => 
    array (
      'savedThreadsView' => 'Plain\\Generated\\UpdateSavedThreadsViewOutputSavedThreadsViewArgs',
      'error' => 'Plain\\Generated\\UpdateSavedThreadsViewOutputErrorArgs',
    ),
    'CreateMyFavoritePageOutput' => 
    array (
      'favoritePage' => 'Plain\\Generated\\CreateMyFavoritePageOutputFavoritePageArgs',
      'error' => 'Plain\\Generated\\CreateMyFavoritePageOutputErrorArgs',
    ),
    'DeleteMyFavoritePageOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteMyFavoritePageOutputErrorArgs',
    ),
    'CreateSnippetOutput' => 
    array (
      'snippet' => 'Plain\\Generated\\CreateSnippetOutputSnippetArgs',
      'error' => 'Plain\\Generated\\CreateSnippetOutputErrorArgs',
    ),
    'DeleteSnippetOutput' => 
    array (
      'snippet' => 'Plain\\Generated\\DeleteSnippetOutputSnippetArgs',
      'error' => 'Plain\\Generated\\DeleteSnippetOutputErrorArgs',
    ),
    'UpdateSnippetOutput' => 
    array (
      'snippet' => 'Plain\\Generated\\UpdateSnippetOutputSnippetArgs',
      'error' => 'Plain\\Generated\\UpdateSnippetOutputErrorArgs',
    ),
    'SendChatOutput' => 
    array (
      'chat' => 'Plain\\Generated\\SendChatOutputChatArgs',
      'error' => 'Plain\\Generated\\SendChatOutputErrorArgs',
    ),
    'SendCustomerChatOutput' => 
    array (
      'chat' => 'Plain\\Generated\\SendCustomerChatOutputChatArgs',
      'error' => 'Plain\\Generated\\SendCustomerChatOutputErrorArgs',
    ),
    'ChangeUserStatusOutput' => 
    array (
      'user' => 'Plain\\Generated\\ChangeUserStatusOutputUserArgs',
      'error' => 'Plain\\Generated\\ChangeUserStatusOutputErrorArgs',
    ),
    'UpdateMyUserOutput' => 
    array (
      'user' => 'Plain\\Generated\\UpdateMyUserOutputUserArgs',
      'error' => 'Plain\\Generated\\UpdateMyUserOutputErrorArgs',
    ),
    'UpdateUserDefaultSavedThreadsViewOutput' => 
    array (
      'user' => 'Plain\\Generated\\UpdateUserDefaultSavedThreadsViewOutputUserArgs',
      'error' => 'Plain\\Generated\\UpdateUserDefaultSavedThreadsViewOutputErrorArgs',
    ),
    'UpdateWorkspaceOutput' => 
    array (
      'workspace' => 'Plain\\Generated\\UpdateWorkspaceOutputWorkspaceArgs',
      'error' => 'Plain\\Generated\\UpdateWorkspaceOutputErrorArgs',
    ),
    'DeleteUserOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteUserOutputErrorArgs',
    ),
    'DnsRecord' => 
    array (
      'type' => 'Plain\\Generated\\DnsRecordTypeArgs',
      'name' => 'Plain\\Generated\\DnsRecordNameArgs',
      'value' => 'Plain\\Generated\\DnsRecordValueArgs',
      'isVerified' => 'Plain\\Generated\\DnsRecordIsVerifiedArgs',
      'verifiedAt' => 'Plain\\Generated\\DnsRecordVerifiedAtArgs',
      'lastCheckedAt' => 'Plain\\Generated\\DnsRecordLastCheckedAtArgs',
    ),
    'WorkspaceEmailDomainSettings' => 
    array (
      'domainName' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsDomainNameArgs',
      'supportEmailAddress' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsSupportEmailAddressArgs',
      'alternateSupportEmailAddresses' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsAlternateSupportEmailAddressesArgs',
      'isForwardingConfigured' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsIsForwardingConfiguredArgs',
      'inboundForwardingEmail' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsInboundForwardingEmailArgs',
      'isDomainConfigured' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsIsDomainConfiguredArgs',
      'dkimDnsRecord' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsDkimDnsRecordArgs',
      'returnPathDnsRecord' => 'Plain\\Generated\\WorkspaceEmailDomainSettingsReturnPathDnsRecordArgs',
    ),
    'WorkspaceEmailSettings' => 
    array (
      'isEnabled' => 'Plain\\Generated\\WorkspaceEmailSettingsIsEnabledArgs',
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\WorkspaceEmailSettingsWorkspaceEmailDomainSettingsArgs',
      'bccEmailAddresses' => 'Plain\\Generated\\WorkspaceEmailSettingsBccEmailAddressesArgs',
    ),
    'AddWorkspaceAlternateSupportEmailAddressOutput' => 
    array (
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\AddWorkspaceAlternateSupportEmailAddressOutputWorkspaceEmailDomainSettingsArgs',
      'error' => 'Plain\\Generated\\AddWorkspaceAlternateSupportEmailAddressOutputErrorArgs',
    ),
    'RemoveWorkspaceAlternateSupportEmailAddressOutput' => 
    array (
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\RemoveWorkspaceAlternateSupportEmailAddressOutputWorkspaceEmailDomainSettingsArgs',
      'error' => 'Plain\\Generated\\RemoveWorkspaceAlternateSupportEmailAddressOutputErrorArgs',
    ),
    'CreateWorkspaceEmailDomainSettingsOutput' => 
    array (
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\CreateWorkspaceEmailDomainSettingsOutputWorkspaceEmailDomainSettingsArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceEmailDomainSettingsOutputErrorArgs',
    ),
    'DeleteWorkspaceEmailDomainSettingsOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteWorkspaceEmailDomainSettingsOutputErrorArgs',
    ),
    'VerifyWorkspaceEmailForwardingSettingsOutput' => 
    array (
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\VerifyWorkspaceEmailForwardingSettingsOutputWorkspaceEmailDomainSettingsArgs',
      'error' => 'Plain\\Generated\\VerifyWorkspaceEmailForwardingSettingsOutputErrorArgs',
    ),
    'VerifyWorkspaceEmailDnsSettingsOutput' => 
    array (
      'workspaceEmailDomainSettings' => 'Plain\\Generated\\VerifyWorkspaceEmailDnsSettingsOutputWorkspaceEmailDomainSettingsArgs',
      'error' => 'Plain\\Generated\\VerifyWorkspaceEmailDnsSettingsOutputErrorArgs',
    ),
    'UpdateWorkspaceEmailSettingsOutput' => 
    array (
      'workspaceEmailSettings' => 'Plain\\Generated\\UpdateWorkspaceEmailSettingsOutputWorkspaceEmailSettingsArgs',
      'error' => 'Plain\\Generated\\UpdateWorkspaceEmailSettingsOutputErrorArgs',
    ),
    'WorkspaceChatSettings' => 
    array (
      'isEnabled' => 'Plain\\Generated\\WorkspaceChatSettingsIsEnabledArgs',
    ),
    'Email' => 
    array (
      'id' => 'Plain\\Generated\\EmailIdArgs',
      'thread' => 'Plain\\Generated\\EmailThreadArgs',
      'customer' => 'Plain\\Generated\\EmailCustomerArgs',
      'inReplyToEmailId' => 'Plain\\Generated\\EmailInReplyToEmailIdArgs',
      'from' => 'Plain\\Generated\\EmailFromArgs',
      'to' => 'Plain\\Generated\\EmailToArgs',
      'subject' => 'Plain\\Generated\\EmailSubjectArgs',
      'textContent' => 'Plain\\Generated\\EmailTextContentArgs',
      'markdownContent' => 'Plain\\Generated\\EmailMarkdownContentArgs',
      'attachments' => 'Plain\\Generated\\EmailAttachmentsArgs',
      'additionalRecipients' => 'Plain\\Generated\\EmailAdditionalRecipientsArgs',
      'hiddenRecipients' => 'Plain\\Generated\\EmailHiddenRecipientsArgs',
      'category' => 'Plain\\Generated\\EmailCategoryArgs',
      'threadDiscussionId' => 'Plain\\Generated\\EmailThreadDiscussionIdArgs',
      'createdAt' => 'Plain\\Generated\\EmailCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\EmailCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\EmailUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\EmailUpdatedByArgs',
    ),
    'SendNewEmailOutput' => 
    array (
      'email' => 'Plain\\Generated\\SendNewEmailOutputEmailArgs',
      'error' => 'Plain\\Generated\\SendNewEmailOutputErrorArgs',
    ),
    'ReplyToEmailOutput' => 
    array (
      'email' => 'Plain\\Generated\\ReplyToEmailOutputEmailArgs',
      'error' => 'Plain\\Generated\\ReplyToEmailOutputErrorArgs',
    ),
    'SendBulkEmailOutput' => 
    array (
      'error' => 'Plain\\Generated\\SendBulkEmailOutputErrorArgs',
    ),
    'EmailPreviewUrl' => 
    array (
      'previewUrl' => 'Plain\\Generated\\EmailPreviewUrlPreviewUrlArgs',
      'expiresAt' => 'Plain\\Generated\\EmailPreviewUrlExpiresAtArgs',
    ),
    'CreateEmailPreviewUrlOutput' => 
    array (
      'emailPreviewUrl' => 'Plain\\Generated\\CreateEmailPreviewUrlOutputEmailPreviewUrlArgs',
      'error' => 'Plain\\Generated\\CreateEmailPreviewUrlOutputErrorArgs',
    ),
    'AttachmentDownloadUrl' => 
    array (
      'attachment' => 'Plain\\Generated\\AttachmentDownloadUrlAttachmentArgs',
      'downloadUrl' => 'Plain\\Generated\\AttachmentDownloadUrlDownloadUrlArgs',
      'expiresAt' => 'Plain\\Generated\\AttachmentDownloadUrlExpiresAtArgs',
    ),
    'CreateAttachmentDownloadUrlOutput' => 
    array (
      'attachmentDownloadUrl' => 'Plain\\Generated\\CreateAttachmentDownloadUrlOutputAttachmentDownloadUrlArgs',
      'attachmentVirusScanResult' => 'Plain\\Generated\\CreateAttachmentDownloadUrlOutputAttachmentVirusScanResultArgs',
      'error' => 'Plain\\Generated\\CreateAttachmentDownloadUrlOutputErrorArgs',
    ),
    'UploadFormData' => 
    array (
      'key' => 'Plain\\Generated\\UploadFormDataKeyArgs',
      'value' => 'Plain\\Generated\\UploadFormDataValueArgs',
    ),
    'AttachmentUploadUrl' => 
    array (
      'attachment' => 'Plain\\Generated\\AttachmentUploadUrlAttachmentArgs',
      'uploadFormUrl' => 'Plain\\Generated\\AttachmentUploadUrlUploadFormUrlArgs',
      'uploadFormData' => 'Plain\\Generated\\AttachmentUploadUrlUploadFormDataArgs',
      'expiresAt' => 'Plain\\Generated\\AttachmentUploadUrlExpiresAtArgs',
    ),
    'CreateAttachmentUploadUrlOutput' => 
    array (
      'attachmentUploadUrl' => 'Plain\\Generated\\CreateAttachmentUploadUrlOutputAttachmentUploadUrlArgs',
      'error' => 'Plain\\Generated\\CreateAttachmentUploadUrlOutputErrorArgs',
    ),
    'UpsertCustomerOutput' => 
    array (
      'result' => 'Plain\\Generated\\UpsertCustomerOutputResultArgs',
      'customer' => 'Plain\\Generated\\UpsertCustomerOutputCustomerArgs',
      'error' => 'Plain\\Generated\\UpsertCustomerOutputErrorArgs',
    ),
    'CreateMachineUserOutput' => 
    array (
      'machineUser' => 'Plain\\Generated\\CreateMachineUserOutputMachineUserArgs',
      'error' => 'Plain\\Generated\\CreateMachineUserOutputErrorArgs',
    ),
    'DeleteMachineUserOutput' => 
    array (
      'machineUser' => 'Plain\\Generated\\DeleteMachineUserOutputMachineUserArgs',
      'error' => 'Plain\\Generated\\DeleteMachineUserOutputErrorArgs',
    ),
    'UpdateMachineUserOutput' => 
    array (
      'machineUser' => 'Plain\\Generated\\UpdateMachineUserOutputMachineUserArgs',
      'error' => 'Plain\\Generated\\UpdateMachineUserOutputErrorArgs',
    ),
    'CreateApiKeyOutput' => 
    array (
      'apiKey' => 'Plain\\Generated\\CreateApiKeyOutputApiKeyArgs',
      'apiKeySecret' => 'Plain\\Generated\\CreateApiKeyOutputApiKeySecretArgs',
      'error' => 'Plain\\Generated\\CreateApiKeyOutputErrorArgs',
    ),
    'UpdateApiKeyOutput' => 
    array (
      'apiKey' => 'Plain\\Generated\\UpdateApiKeyOutputApiKeyArgs',
      'error' => 'Plain\\Generated\\UpdateApiKeyOutputErrorArgs',
    ),
    'DeleteApiKeyOutput' => 
    array (
      'apiKey' => 'Plain\\Generated\\DeleteApiKeyOutputApiKeyArgs',
      'error' => 'Plain\\Generated\\DeleteApiKeyOutputErrorArgs',
    ),
    'DeleteCustomerOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteCustomerOutputErrorArgs',
    ),
    'DeleteThreadOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteThreadOutputErrorArgs',
    ),
    'CreateCustomerEventOutput' => 
    array (
      'customerEvent' => 'Plain\\Generated\\CreateCustomerEventOutputCustomerEventArgs',
      'error' => 'Plain\\Generated\\CreateCustomerEventOutputErrorArgs',
    ),
    'CreateThreadEventOutput' => 
    array (
      'threadEvent' => 'Plain\\Generated\\CreateThreadEventOutputThreadEventArgs',
      'error' => 'Plain\\Generated\\CreateThreadEventOutputErrorArgs',
    ),
    'CreateAutoresponderOutput' => 
    array (
      'autoresponder' => 'Plain\\Generated\\CreateAutoresponderOutputAutoresponderArgs',
      'error' => 'Plain\\Generated\\CreateAutoresponderOutputErrorArgs',
    ),
    'UpdateAutoresponderOutput' => 
    array (
      'autoresponder' => 'Plain\\Generated\\UpdateAutoresponderOutputAutoresponderArgs',
      'error' => 'Plain\\Generated\\UpdateAutoresponderOutputErrorArgs',
    ),
    'DeleteAutoresponderOutput' => 
    array (
      'autoresponder' => 'Plain\\Generated\\DeleteAutoresponderOutputAutoresponderArgs',
      'error' => 'Plain\\Generated\\DeleteAutoresponderOutputErrorArgs',
    ),
    'ReorderAutorespondersOutput' => 
    array (
      'autoresponders' => 'Plain\\Generated\\ReorderAutorespondersOutputAutorespondersArgs',
      'error' => 'Plain\\Generated\\ReorderAutorespondersOutputErrorArgs',
    ),
    'AutoresponderTierCondition' => 
    array (
      'tierId' => 'Plain\\Generated\\AutoresponderTierConditionTierIdArgs',
    ),
    'AutoresponderBusinessHoursCondition' => 
    array (
      'isOutsideBusinessHours' => 'Plain\\Generated\\AutoresponderBusinessHoursConditionIsOutsideBusinessHoursArgs',
    ),
    'AutoresponderSupportEmailsCondition' => 
    array (
      'supportEmailAddresses' => 'Plain\\Generated\\AutoresponderSupportEmailsConditionSupportEmailAddressesArgs',
    ),
    'AutoresponderLabelCondition' => 
    array (
      'labelTypeIds' => 'Plain\\Generated\\AutoresponderLabelConditionLabelTypeIdsArgs',
    ),
    'AutoresponderPrioritiesCondition' => 
    array (
      'priorities' => 'Plain\\Generated\\AutoresponderPrioritiesConditionPrioritiesArgs',
    ),
    'Autoresponder' => 
    array (
      'id' => 'Plain\\Generated\\AutoresponderIdArgs',
      'name' => 'Plain\\Generated\\AutoresponderNameArgs',
      'order' => 'Plain\\Generated\\AutoresponderOrderArgs',
      'messageSources' => 'Plain\\Generated\\AutoresponderMessageSourcesArgs',
      'conditions' => 'Plain\\Generated\\AutoresponderConditionsArgs',
      'textContent' => 'Plain\\Generated\\AutoresponderTextContentArgs',
      'markdownContent' => 'Plain\\Generated\\AutoresponderMarkdownContentArgs',
      'isEnabled' => 'Plain\\Generated\\AutoresponderIsEnabledArgs',
      'responseDelaySeconds' => 'Plain\\Generated\\AutoresponderResponseDelaySecondsArgs',
      'createdAt' => 'Plain\\Generated\\AutoresponderCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\AutoresponderCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\AutoresponderUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\AutoresponderUpdatedByArgs',
    ),
    'AutoresponderConnection' => 
    array (
      'edges' => 'Plain\\Generated\\AutoresponderConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\AutoresponderConnectionPageInfoArgs',
    ),
    'AutoresponderEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\AutoresponderEdgeCursorArgs',
      'node' => 'Plain\\Generated\\AutoresponderEdgeNodeArgs',
    ),
    'CsatCustomerSurveyTemplate' => 
    array (
      'type' => 'Plain\\Generated\\CsatCustomerSurveyTemplateTypeArgs',
      'questionText' => 'Plain\\Generated\\CsatCustomerSurveyTemplateQuestionTextArgs',
    ),
    'CustomerSurvey' => 
    array (
      'id' => 'Plain\\Generated\\CustomerSurveyIdArgs',
      'name' => 'Plain\\Generated\\CustomerSurveyNameArgs',
      'template' => 'Plain\\Generated\\CustomerSurveyTemplateArgs',
      'conditions' => 'Plain\\Generated\\CustomerSurveyConditionsArgs',
      'isEnabled' => 'Plain\\Generated\\CustomerSurveyIsEnabledArgs',
      'responseDelayMinutes' => 'Plain\\Generated\\CustomerSurveyResponseDelayMinutesArgs',
      'customerIntervalDays' => 'Plain\\Generated\\CustomerSurveyCustomerIntervalDaysArgs',
      'order' => 'Plain\\Generated\\CustomerSurveyOrderArgs',
      'createdAt' => 'Plain\\Generated\\CustomerSurveyCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\CustomerSurveyCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\CustomerSurveyUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\CustomerSurveyUpdatedByArgs',
    ),
    'CustomerSurveyTiersCondition' => 
    array (
      'tierIds' => 'Plain\\Generated\\CustomerSurveyTiersConditionTierIdsArgs',
    ),
    'CustomerSurveySupportEmailsCondition' => 
    array (
      'supportEmailAddresses' => 'Plain\\Generated\\CustomerSurveySupportEmailsConditionSupportEmailAddressesArgs',
    ),
    'CustomerSurveyLabelCondition' => 
    array (
      'labelTypeIds' => 'Plain\\Generated\\CustomerSurveyLabelConditionLabelTypeIdsArgs',
    ),
    'CustomerSurveyPrioritiesCondition' => 
    array (
      'priorities' => 'Plain\\Generated\\CustomerSurveyPrioritiesConditionPrioritiesArgs',
    ),
    'CustomerSurveyMessageSourceCondition' => 
    array (
      'messageSource' => 'Plain\\Generated\\CustomerSurveyMessageSourceConditionMessageSourceArgs',
    ),
    'CreateCustomerSurveyOutput' => 
    array (
      'customerSurvey' => 'Plain\\Generated\\CreateCustomerSurveyOutputCustomerSurveyArgs',
      'error' => 'Plain\\Generated\\CreateCustomerSurveyOutputErrorArgs',
    ),
    'UpdateCustomerSurveyOutput' => 
    array (
      'customerSurvey' => 'Plain\\Generated\\UpdateCustomerSurveyOutputCustomerSurveyArgs',
      'error' => 'Plain\\Generated\\UpdateCustomerSurveyOutputErrorArgs',
    ),
    'DeleteCustomerSurveyOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteCustomerSurveyOutputErrorArgs',
    ),
    'ReorderCustomerSurveysOutput' => 
    array (
      'customerSurveys' => 'Plain\\Generated\\ReorderCustomerSurveysOutputCustomerSurveysArgs',
      'error' => 'Plain\\Generated\\ReorderCustomerSurveysOutputErrorArgs',
    ),
    'Mutation' => 
    array (
      'createUserAccount' => 'Plain\\Generated\\MutationCreateUserAccountArgs',
      'changeUserStatus' => 'Plain\\Generated\\MutationChangeUserStatusArgs',
      'updateMyUser' => 'Plain\\Generated\\MutationUpdateMyUserArgs',
      'updateUserDefaultSavedThreadsView' => 'Plain\\Generated\\MutationUpdateUserDefaultSavedThreadsViewArgs',
      'createWorkspace' => 'Plain\\Generated\\MutationCreateWorkspaceArgs',
      'updateWorkspace' => 'Plain\\Generated\\MutationUpdateWorkspaceArgs',
      'inviteUserToWorkspace' => 'Plain\\Generated\\MutationInviteUserToWorkspaceArgs',
      'acceptWorkspaceInvite' => 'Plain\\Generated\\MutationAcceptWorkspaceInviteArgs',
      'deleteWorkspaceInvite' => 'Plain\\Generated\\MutationDeleteWorkspaceInviteArgs',
      'deleteUser' => 'Plain\\Generated\\MutationDeleteUserArgs',
      'assignRolesToUser' => 'Plain\\Generated\\MutationAssignRolesToUserArgs',
      'createCustomRole' => 'Plain\\Generated\\MutationCreateCustomRoleArgs',
      'updateCustomRole' => 'Plain\\Generated\\MutationUpdateCustomRoleArgs',
      'deleteCustomRole' => 'Plain\\Generated\\MutationDeleteCustomRoleArgs',
      'upsertRoleScopes' => 'Plain\\Generated\\MutationUpsertRoleScopesArgs',
      'createLabelType' => 'Plain\\Generated\\MutationCreateLabelTypeArgs',
      'archiveLabelType' => 'Plain\\Generated\\MutationArchiveLabelTypeArgs',
      'unarchiveLabelType' => 'Plain\\Generated\\MutationUnarchiveLabelTypeArgs',
      'updateLabelType' => 'Plain\\Generated\\MutationUpdateLabelTypeArgs',
      'moveLabelType' => 'Plain\\Generated\\MutationMoveLabelTypeArgs',
      'addLabels' => 'Plain\\Generated\\MutationAddLabelsArgs',
      'addLabelsToUser' => 'Plain\\Generated\\MutationAddLabelsToUserArgs',
      'removeLabels' => 'Plain\\Generated\\MutationRemoveLabelsArgs',
      'removeLabelsFromUser' => 'Plain\\Generated\\MutationRemoveLabelsFromUserArgs',
      'createThreadLink' => 'Plain\\Generated\\MutationCreateThreadLinkArgs',
      'deleteThreadLink' => 'Plain\\Generated\\MutationDeleteThreadLinkArgs',
      'createNote' => 'Plain\\Generated\\MutationCreateNoteArgs',
      'deleteNote' => 'Plain\\Generated\\MutationDeleteNoteArgs',
      'createSavedThreadsView' => 'Plain\\Generated\\MutationCreateSavedThreadsViewArgs',
      'updateSavedThreadsView' => 'Plain\\Generated\\MutationUpdateSavedThreadsViewArgs',
      'deleteSavedThreadsView' => 'Plain\\Generated\\MutationDeleteSavedThreadsViewArgs',
      'createMyFavoritePage' => 'Plain\\Generated\\MutationCreateMyFavoritePageArgs',
      'deleteMyFavoritePage' => 'Plain\\Generated\\MutationDeleteMyFavoritePageArgs',
      'createSnippet' => 'Plain\\Generated\\MutationCreateSnippetArgs',
      'deleteSnippet' => 'Plain\\Generated\\MutationDeleteSnippetArgs',
      'updateSnippet' => 'Plain\\Generated\\MutationUpdateSnippetArgs',
      'upsertCustomer' => 'Plain\\Generated\\MutationUpsertCustomerArgs',
      'updateCustomerCompany' => 'Plain\\Generated\\MutationUpdateCustomerCompanyArgs',
      'deleteCustomer' => 'Plain\\Generated\\MutationDeleteCustomerArgs',
      'markCustomerAsSpam' => 'Plain\\Generated\\MutationMarkCustomerAsSpamArgs',
      'unmarkCustomerAsSpam' => 'Plain\\Generated\\MutationUnmarkCustomerAsSpamArgs',
      'upsertCustomerGroup' => 'Plain\\Generated\\MutationUpsertCustomerGroupArgs',
      'createCustomerGroup' => 'Plain\\Generated\\MutationCreateCustomerGroupArgs',
      'updateCustomerGroup' => 'Plain\\Generated\\MutationUpdateCustomerGroupArgs',
      'deleteCustomerGroup' => 'Plain\\Generated\\MutationDeleteCustomerGroupArgs',
      'addCustomerToCustomerGroups' => 'Plain\\Generated\\MutationAddCustomerToCustomerGroupsArgs',
      'removeCustomerFromCustomerGroups' => 'Plain\\Generated\\MutationRemoveCustomerFromCustomerGroupsArgs',
      'createThreadFieldSchema' => 'Plain\\Generated\\MutationCreateThreadFieldSchemaArgs',
      'updateThreadFieldSchema' => 'Plain\\Generated\\MutationUpdateThreadFieldSchemaArgs',
      'deleteThreadFieldSchema' => 'Plain\\Generated\\MutationDeleteThreadFieldSchemaArgs',
      'reorderThreadFieldSchemas' => 'Plain\\Generated\\MutationReorderThreadFieldSchemasArgs',
      'upsertThreadField' => 'Plain\\Generated\\MutationUpsertThreadFieldArgs',
      'bulkUpsertThreadFields' => 'Plain\\Generated\\MutationBulkUpsertThreadFieldsArgs',
      'deleteThreadField' => 'Plain\\Generated\\MutationDeleteThreadFieldArgs',
      'createEscalationPath' => 'Plain\\Generated\\MutationCreateEscalationPathArgs',
      'updateEscalationPath' => 'Plain\\Generated\\MutationUpdateEscalationPathArgs',
      'deleteEscalationPath' => 'Plain\\Generated\\MutationDeleteEscalationPathArgs',
      'createWorkflowRule' => 'Plain\\Generated\\MutationCreateWorkflowRuleArgs',
      'updateWorkflowRule' => 'Plain\\Generated\\MutationUpdateWorkflowRuleArgs',
      'toggleWorkflowRulePublished' => 'Plain\\Generated\\MutationToggleWorkflowRulePublishedArgs',
      'deleteWorkflowRule' => 'Plain\\Generated\\MutationDeleteWorkflowRuleArgs',
      'triggerWorkflowRule' => 'Plain\\Generated\\MutationTriggerWorkflowRuleArgs',
      'sendChat' => 'Plain\\Generated\\MutationSendChatArgs',
      'sendCustomerChat' => 'Plain\\Generated\\MutationSendCustomerChatArgs',
      'createChatApp' => 'Plain\\Generated\\MutationCreateChatAppArgs',
      'updateChatApp' => 'Plain\\Generated\\MutationUpdateChatAppArgs',
      'deleteChatApp' => 'Plain\\Generated\\MutationDeleteChatAppArgs',
      'createChatAppSecret' => 'Plain\\Generated\\MutationCreateChatAppSecretArgs',
      'deleteChatAppSecret' => 'Plain\\Generated\\MutationDeleteChatAppSecretArgs',
      'sendMSTeamsMessage' => 'Plain\\Generated\\MutationSendMSTeamsMessageArgs',
      'sendSlackMessage' => 'Plain\\Generated\\MutationSendSlackMessageArgs',
      'shareThreadToUserInSlack' => 'Plain\\Generated\\MutationShareThreadToUserInSlackArgs',
      'sendDiscordMessage' => 'Plain\\Generated\\MutationSendDiscordMessageArgs',
      'toggleSlackMessageReaction' => 'Plain\\Generated\\MutationToggleSlackMessageReactionArgs',
      'forkThread' => 'Plain\\Generated\\MutationForkThreadArgs',
      'updateConnectedSlackChannel' => 'Plain\\Generated\\MutationUpdateConnectedSlackChannelArgs',
      'bulkJoinSlackChannels' => 'Plain\\Generated\\MutationBulkJoinSlackChannelsArgs',
      'createCustomerEvent' => 'Plain\\Generated\\MutationCreateCustomerEventArgs',
      'createThreadEvent' => 'Plain\\Generated\\MutationCreateThreadEventArgs',
      'createWorkspaceEmailDomainSettings' => 'Plain\\Generated\\MutationCreateWorkspaceEmailDomainSettingsArgs',
      'deleteWorkspaceEmailDomainSettings' => 'Plain\\Generated\\MutationDeleteWorkspaceEmailDomainSettingsArgs',
      'verifyWorkspaceEmailForwardingSettings' => 'Plain\\Generated\\MutationVerifyWorkspaceEmailForwardingSettingsArgs',
      'verifyWorkspaceEmailDnsSettings' => 'Plain\\Generated\\MutationVerifyWorkspaceEmailDnsSettingsArgs',
      'updateWorkspaceEmailSettings' => 'Plain\\Generated\\MutationUpdateWorkspaceEmailSettingsArgs',
      'addWorkspaceAlternateSupportEmailAddress' => 'Plain\\Generated\\MutationAddWorkspaceAlternateSupportEmailAddressArgs',
      'removeWorkspaceAlternateSupportEmailAddress' => 'Plain\\Generated\\MutationRemoveWorkspaceAlternateSupportEmailAddressArgs',
      'sendNewEmail' => 'Plain\\Generated\\MutationSendNewEmailArgs',
      'replyToEmail' => 'Plain\\Generated\\MutationReplyToEmailArgs',
      'createEmailPreviewUrl' => 'Plain\\Generated\\MutationCreateEmailPreviewUrlArgs',
      'sendBulkEmail' => 'Plain\\Generated\\MutationSendBulkEmailArgs',
      'createAttachmentDownloadUrl' => 'Plain\\Generated\\MutationCreateAttachmentDownloadUrlArgs',
      'createAttachmentUploadUrl' => 'Plain\\Generated\\MutationCreateAttachmentUploadUrlArgs',
      'createMachineUser' => 'Plain\\Generated\\MutationCreateMachineUserArgs',
      'deleteMachineUser' => 'Plain\\Generated\\MutationDeleteMachineUserArgs',
      'updateMachineUser' => 'Plain\\Generated\\MutationUpdateMachineUserArgs',
      'createApiKey' => 'Plain\\Generated\\MutationCreateApiKeyArgs',
      'updateApiKey' => 'Plain\\Generated\\MutationUpdateApiKeyArgs',
      'deleteApiKey' => 'Plain\\Generated\\MutationDeleteApiKeyArgs',
      'createMySlackIntegration' => 'Plain\\Generated\\MutationCreateMySlackIntegrationArgs',
      'deleteMySlackIntegration' => 'Plain\\Generated\\MutationDeleteMySlackIntegrationArgs',
      'createUserAuthSlackIntegration' => 'Plain\\Generated\\MutationCreateUserAuthSlackIntegrationArgs',
      'deleteUserAuthSlackIntegration' => 'Plain\\Generated\\MutationDeleteUserAuthSlackIntegrationArgs',
      'createWorkspaceSlackIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceSlackIntegrationArgs',
      'deleteWorkspaceSlackIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceSlackIntegrationArgs',
      'createWorkspaceSlackChannelIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceSlackChannelIntegrationArgs',
      'refreshWorkspaceSlackChannelIntegration' => 'Plain\\Generated\\MutationRefreshWorkspaceSlackChannelIntegrationArgs',
      'deleteWorkspaceSlackChannelIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceSlackChannelIntegrationArgs',
      'createWorkspaceDiscordChannelIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceDiscordChannelIntegrationArgs',
      'deleteWorkspaceDiscordChannelIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceDiscordChannelIntegrationArgs',
      'createUserAuthDiscordChannelIntegration' => 'Plain\\Generated\\MutationCreateUserAuthDiscordChannelIntegrationArgs',
      'deleteUserAuthDiscordChannelIntegration' => 'Plain\\Generated\\MutationDeleteUserAuthDiscordChannelIntegrationArgs',
      'refreshConnectedDiscordChannels' => 'Plain\\Generated\\MutationRefreshConnectedDiscordChannelsArgs',
      'updateConnectedDiscordChannel' => 'Plain\\Generated\\MutationUpdateConnectedDiscordChannelArgs',
      'createWorkspaceDiscordIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceDiscordIntegrationArgs',
      'deleteWorkspaceDiscordIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceDiscordIntegrationArgs',
      'createMyLinearIntegration' => 'Plain\\Generated\\MutationCreateMyLinearIntegrationArgs',
      'deleteMyLinearIntegration' => 'Plain\\Generated\\MutationDeleteMyLinearIntegrationArgs',
      'createGithubUserAuthIntegration' => 'Plain\\Generated\\MutationCreateGithubUserAuthIntegrationArgs',
      'deleteGithubUserAuthIntegration' => 'Plain\\Generated\\MutationDeleteGithubUserAuthIntegrationArgs',
      'createWorkspaceCursorIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceCursorIntegrationArgs',
      'deleteWorkspaceCursorIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceCursorIntegrationArgs',
      'createMyMSTeamsIntegration' => 'Plain\\Generated\\MutationCreateMyMSTeamsIntegrationArgs',
      'deleteMyMSTeamsIntegration' => 'Plain\\Generated\\MutationDeleteMyMSTeamsIntegrationArgs',
      'createWorkspaceMSTeamsIntegration' => 'Plain\\Generated\\MutationCreateWorkspaceMSTeamsIntegrationArgs',
      'deleteWorkspaceMSTeamsIntegration' => 'Plain\\Generated\\MutationDeleteWorkspaceMSTeamsIntegrationArgs',
      'updateSetting' => 'Plain\\Generated\\MutationUpdateSettingArgs',
      'createCustomerCardConfig' => 'Plain\\Generated\\MutationCreateCustomerCardConfigArgs',
      'updateCustomerCardConfig' => 'Plain\\Generated\\MutationUpdateCustomerCardConfigArgs',
      'deleteCustomerCardConfig' => 'Plain\\Generated\\MutationDeleteCustomerCardConfigArgs',
      'reorderCustomerCardConfigs' => 'Plain\\Generated\\MutationReorderCustomerCardConfigsArgs',
      'reloadCustomerCardInstance' => 'Plain\\Generated\\MutationReloadCustomerCardInstanceArgs',
      'createWebhookTarget' => 'Plain\\Generated\\MutationCreateWebhookTargetArgs',
      'updateWebhookTarget' => 'Plain\\Generated\\MutationUpdateWebhookTargetArgs',
      'deleteWebhookTarget' => 'Plain\\Generated\\MutationDeleteWebhookTargetArgs',
      'createThread' => 'Plain\\Generated\\MutationCreateThreadArgs',
      'assignThread' => 'Plain\\Generated\\MutationAssignThreadArgs',
      'unassignThread' => 'Plain\\Generated\\MutationUnassignThreadArgs',
      'addAdditionalAssignees' => 'Plain\\Generated\\MutationAddAdditionalAssigneesArgs',
      'removeAdditionalAssignees' => 'Plain\\Generated\\MutationRemoveAdditionalAssigneesArgs',
      'snoozeThread' => 'Plain\\Generated\\MutationSnoozeThreadArgs',
      'markThreadAsDone' => 'Plain\\Generated\\MutationMarkThreadAsDoneArgs',
      'markThreadAsTodo' => 'Plain\\Generated\\MutationMarkThreadAsTodoArgs',
      'changeThreadCustomer' => 'Plain\\Generated\\MutationChangeThreadCustomerArgs',
      'changeThreadPriority' => 'Plain\\Generated\\MutationChangeThreadPriorityArgs',
      'updateThreadTitle' => 'Plain\\Generated\\MutationUpdateThreadTitleArgs',
      'updateThreadTenant' => 'Plain\\Generated\\MutationUpdateThreadTenantArgs',
      'updateThreadTier' => 'Plain\\Generated\\MutationUpdateThreadTierArgs',
      'updateThreadEscalationPath' => 'Plain\\Generated\\MutationUpdateThreadEscalationPathArgs',
      'deleteThread' => 'Plain\\Generated\\MutationDeleteThreadArgs',
      'createThreadDiscussion' => 'Plain\\Generated\\MutationCreateThreadDiscussionArgs',
      'sendThreadDiscussionMessage' => 'Plain\\Generated\\MutationSendThreadDiscussionMessageArgs',
      'markThreadDiscussionAsResolved' => 'Plain\\Generated\\MutationMarkThreadDiscussionAsResolvedArgs',
      'replyToThread' => 'Plain\\Generated\\MutationReplyToThreadArgs',
      'upsertMyEmailSignature' => 'Plain\\Generated\\MutationUpsertMyEmailSignatureArgs',
      'createAutoresponder' => 'Plain\\Generated\\MutationCreateAutoresponderArgs',
      'updateAutoresponder' => 'Plain\\Generated\\MutationUpdateAutoresponderArgs',
      'deleteAutoresponder' => 'Plain\\Generated\\MutationDeleteAutoresponderArgs',
      'reorderAutoresponders' => 'Plain\\Generated\\MutationReorderAutorespondersArgs',
      'upsertTenant' => 'Plain\\Generated\\MutationUpsertTenantArgs',
      'deleteTenant' => 'Plain\\Generated\\MutationDeleteTenantArgs',
      'addCustomerToTenants' => 'Plain\\Generated\\MutationAddCustomerToTenantsArgs',
      'removeCustomerFromTenants' => 'Plain\\Generated\\MutationRemoveCustomerFromTenantsArgs',
      'setCustomerTenants' => 'Plain\\Generated\\MutationSetCustomerTenantsArgs',
      'upsertTenantFieldSchema' => 'Plain\\Generated\\MutationUpsertTenantFieldSchemaArgs',
      'deleteTenantFieldSchema' => 'Plain\\Generated\\MutationDeleteTenantFieldSchemaArgs',
      'upsertTenantField' => 'Plain\\Generated\\MutationUpsertTenantFieldArgs',
      'deleteTenantField' => 'Plain\\Generated\\MutationDeleteTenantFieldArgs',
      'setupTenantFieldSchemaMapping' => 'Plain\\Generated\\MutationSetupTenantFieldSchemaMappingArgs',
      'removeTenantFieldSchemaMapping' => 'Plain\\Generated\\MutationRemoveTenantFieldSchemaMappingArgs',
      'upsertCompany' => 'Plain\\Generated\\MutationUpsertCompanyArgs',
      'deleteCompany' => 'Plain\\Generated\\MutationDeleteCompanyArgs',
      'startServiceAuthorization' => 'Plain\\Generated\\MutationStartServiceAuthorizationArgs',
      'completeServiceAuthorization' => 'Plain\\Generated\\MutationCompleteServiceAuthorizationArgs',
      'deleteServiceAuthorization' => 'Plain\\Generated\\MutationDeleteServiceAuthorizationArgs',
      'deleteMyServiceAuthorization' => 'Plain\\Generated\\MutationDeleteMyServiceAuthorizationArgs',
      'createTier' => 'Plain\\Generated\\MutationCreateTierArgs',
      'updateTier' => 'Plain\\Generated\\MutationUpdateTierArgs',
      'deleteTier' => 'Plain\\Generated\\MutationDeleteTierArgs',
      'createServiceLevelAgreement' => 'Plain\\Generated\\MutationCreateServiceLevelAgreementArgs',
      'updateServiceLevelAgreement' => 'Plain\\Generated\\MutationUpdateServiceLevelAgreementArgs',
      'deleteServiceLevelAgreement' => 'Plain\\Generated\\MutationDeleteServiceLevelAgreementArgs',
      'addMembersToTier' => 'Plain\\Generated\\MutationAddMembersToTierArgs',
      'removeMembersFromTier' => 'Plain\\Generated\\MutationRemoveMembersFromTierArgs',
      'updateCompanyTier' => 'Plain\\Generated\\MutationUpdateCompanyTierArgs',
      'updateTenantTier' => 'Plain\\Generated\\MutationUpdateTenantTierArgs',
      'upsertBusinessHours' => 'Plain\\Generated\\MutationUpsertBusinessHoursArgs',
      'deleteBusinessHours' => 'Plain\\Generated\\MutationDeleteBusinessHoursArgs',
      'syncBusinessHoursSlots' => 'Plain\\Generated\\MutationSyncBusinessHoursSlotsArgs',
      'createCheckoutSession' => 'Plain\\Generated\\MutationCreateCheckoutSessionArgs',
      'createBillingPortalSession' => 'Plain\\Generated\\MutationCreateBillingPortalSessionArgs',
      'calculateRoleChangeCost' => 'Plain\\Generated\\MutationCalculateRoleChangeCostArgs',
      'addUserToActiveBillingRota' => 'Plain\\Generated\\MutationAddUserToActiveBillingRotaArgs',
      'removeUserFromActiveBillingRota' => 'Plain\\Generated\\MutationRemoveUserFromActiveBillingRotaArgs',
      'updateActiveBillingRota' => 'Plain\\Generated\\MutationUpdateActiveBillingRotaArgs',
      'changeBillingPlan' => 'Plain\\Generated\\MutationChangeBillingPlanArgs',
      'previewBillingPlanChange' => 'Plain\\Generated\\MutationPreviewBillingPlanChangeArgs',
      'regenerateWorkspaceHmac' => 'Plain\\Generated\\MutationRegenerateWorkspaceHmacArgs',
      'createIndexedDocument' => 'Plain\\Generated\\MutationCreateIndexedDocumentArgs',
      'updateGeneratedReply' => 'Plain\\Generated\\MutationUpdateGeneratedReplyArgs',
      'createKnowledgeSource' => 'Plain\\Generated\\MutationCreateKnowledgeSourceArgs',
      'deleteKnowledgeSource' => 'Plain\\Generated\\MutationDeleteKnowledgeSourceArgs',
      'createThreadChannelAssociation' => 'Plain\\Generated\\MutationCreateThreadChannelAssociationArgs',
      'deleteThreadChannelAssociation' => 'Plain\\Generated\\MutationDeleteThreadChannelAssociationArgs',
      'createWorkspaceFileUploadUrl' => 'Plain\\Generated\\MutationCreateWorkspaceFileUploadUrlArgs',
      'deleteWorkspaceFile' => 'Plain\\Generated\\MutationDeleteWorkspaceFileArgs',
      'resolveCustomerForSlackChannel' => 'Plain\\Generated\\MutationResolveCustomerForSlackChannelArgs',
      'resolveCustomerForMSTeamsChannel' => 'Plain\\Generated\\MutationResolveCustomerForMSTeamsChannelArgs',
      'createHelpCenter' => 'Plain\\Generated\\MutationCreateHelpCenterArgs',
      'updateHelpCenter' => 'Plain\\Generated\\MutationUpdateHelpCenterArgs',
      'deleteHelpCenter' => 'Plain\\Generated\\MutationDeleteHelpCenterArgs',
      'updateHelpCenterCustomDomainName' => 'Plain\\Generated\\MutationUpdateHelpCenterCustomDomainNameArgs',
      'verifyHelpCenterCustomDomainName' => 'Plain\\Generated\\MutationVerifyHelpCenterCustomDomainNameArgs',
      'updateHelpCenterIndex' => 'Plain\\Generated\\MutationUpdateHelpCenterIndexArgs',
      'upsertHelpCenterArticle' => 'Plain\\Generated\\MutationUpsertHelpCenterArticleArgs',
      'deleteHelpCenterArticle' => 'Plain\\Generated\\MutationDeleteHelpCenterArticleArgs',
      'generateHelpCenterArticle' => 'Plain\\Generated\\MutationGenerateHelpCenterArticleArgs',
      'createHelpCenterArticleGroup' => 'Plain\\Generated\\MutationCreateHelpCenterArticleGroupArgs',
      'updateHelpCenterArticleGroup' => 'Plain\\Generated\\MutationUpdateHelpCenterArticleGroupArgs',
      'deleteHelpCenterArticleGroup' => 'Plain\\Generated\\MutationDeleteHelpCenterArticleGroupArgs',
      'createIssueTrackerIssue' => 'Plain\\Generated\\MutationCreateIssueTrackerIssueArgs',
      'createCustomerSurvey' => 'Plain\\Generated\\MutationCreateCustomerSurveyArgs',
      'updateCustomerSurvey' => 'Plain\\Generated\\MutationUpdateCustomerSurveyArgs',
      'deleteCustomerSurvey' => 'Plain\\Generated\\MutationDeleteCustomerSurveyArgs',
      'reorderCustomerSurveys' => 'Plain\\Generated\\MutationReorderCustomerSurveysArgs',
      'addGeneratedReply' => 'Plain\\Generated\\MutationAddGeneratedReplyArgs',
      'escalateThread' => 'Plain\\Generated\\MutationEscalateThreadArgs',
      'createAiFeatureFeedback' => 'Plain\\Generated\\MutationCreateAiFeatureFeedbackArgs',
    ),
    'CreateAiFeatureFeedbackOutput' => 
    array (
      'aiFeatureFeedback' => 'Plain\\Generated\\CreateAiFeatureFeedbackOutputAiFeatureFeedbackArgs',
      'error' => 'Plain\\Generated\\CreateAiFeatureFeedbackOutputErrorArgs',
    ),
    'AiAgentFeedbackDetails' => 
    array (
      'reason' => 'Plain\\Generated\\AiAgentFeedbackDetailsReasonArgs',
      'comment' => 'Plain\\Generated\\AiAgentFeedbackDetailsCommentArgs',
      'threadId' => 'Plain\\Generated\\AiAgentFeedbackDetailsThreadIdArgs',
      'timelineEntryId' => 'Plain\\Generated\\AiAgentFeedbackDetailsTimelineEntryIdArgs',
    ),
    'AiFeatureFeedbackOutput' => 
    array (
      'id' => 'Plain\\Generated\\AiFeatureFeedbackOutputIdArgs',
      'feature' => 'Plain\\Generated\\AiFeatureFeedbackOutputFeatureArgs',
      'details' => 'Plain\\Generated\\AiFeatureFeedbackOutputDetailsArgs',
    ),
    'EscalateThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\EscalateThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\EscalateThreadOutputErrorArgs',
    ),
    'MoveLabelTypeOutput' => 
    array (
      'labelType' => 'Plain\\Generated\\MoveLabelTypeOutputLabelTypeArgs',
      'error' => 'Plain\\Generated\\MoveLabelTypeOutputErrorArgs',
    ),
    'GenerateHelpCenterArticleOutput' => 
    array (
      'helpCenterArticles' => 'Plain\\Generated\\GenerateHelpCenterArticleOutputHelpCenterArticlesArgs',
      'error' => 'Plain\\Generated\\GenerateHelpCenterArticleOutputErrorArgs',
    ),
    'DeleteCompanyOutput' => 
    array (
      'company' => 'Plain\\Generated\\DeleteCompanyOutputCompanyArgs',
      'error' => 'Plain\\Generated\\DeleteCompanyOutputErrorArgs',
    ),
    'UpdateHelpCenterIndexOutput' => 
    array (
      'helpCenterIndex' => 'Plain\\Generated\\UpdateHelpCenterIndexOutputHelpCenterIndexArgs',
      'error' => 'Plain\\Generated\\UpdateHelpCenterIndexOutputErrorArgs',
    ),
    'UpdateHelpCenterCustomDomainNameOutput' => 
    array (
      'helpCenter' => 'Plain\\Generated\\UpdateHelpCenterCustomDomainNameOutputHelpCenterArgs',
      'error' => 'Plain\\Generated\\UpdateHelpCenterCustomDomainNameOutputErrorArgs',
    ),
    'VerifyHelpCenterCustomDomainNameOutput' => 
    array (
      'helpCenter' => 'Plain\\Generated\\VerifyHelpCenterCustomDomainNameOutputHelpCenterArgs',
      'error' => 'Plain\\Generated\\VerifyHelpCenterCustomDomainNameOutputErrorArgs',
    ),
    'AddGeneratedReplyOutput' => 
    array (
      'generatedReply' => 'Plain\\Generated\\AddGeneratedReplyOutputGeneratedReplyArgs',
      'error' => 'Plain\\Generated\\AddGeneratedReplyOutputErrorArgs',
    ),
    'UpdateGeneratedReplyOutput' => 
    array (
      'generatedReply' => 'Plain\\Generated\\UpdateGeneratedReplyOutputGeneratedReplyArgs',
      'error' => 'Plain\\Generated\\UpdateGeneratedReplyOutputErrorArgs',
    ),
    'CreateIndexedDocumentOutput' => 
    array (
      'error' => 'Plain\\Generated\\CreateIndexedDocumentOutputErrorArgs',
      'indexedDocument' => 'Plain\\Generated\\CreateIndexedDocumentOutputIndexedDocumentArgs',
    ),
    'IndexedDocument' => 
    array (
      'id' => 'Plain\\Generated\\IndexedDocumentIdArgs',
      'url' => 'Plain\\Generated\\IndexedDocumentUrlArgs',
      'labelTypes' => 'Plain\\Generated\\IndexedDocumentLabelTypesArgs',
      'status' => 'Plain\\Generated\\IndexedDocumentStatusArgs',
      'createdAt' => 'Plain\\Generated\\IndexedDocumentCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\IndexedDocumentCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\IndexedDocumentUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\IndexedDocumentUpdatedByArgs',
    ),
    'IndexedDocumentStatusIndexed' => 
    array (
      'indexedAt' => 'Plain\\Generated\\IndexedDocumentStatusIndexedIndexedAtArgs',
    ),
    'IndexedDocumentStatusPending' => 
    array (
      'startedAt' => 'Plain\\Generated\\IndexedDocumentStatusPendingStartedAtArgs',
    ),
    'IndexedDocumentStatusFailed' => 
    array (
      'reason' => 'Plain\\Generated\\IndexedDocumentStatusFailedReasonArgs',
      'failedAt' => 'Plain\\Generated\\IndexedDocumentStatusFailedFailedAtArgs',
    ),
    'IndexedDocumentConnection' => 
    array (
      'edges' => 'Plain\\Generated\\IndexedDocumentConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\IndexedDocumentConnectionPageInfoArgs',
    ),
    'IndexedDocumentEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\IndexedDocumentEdgeCursorArgs',
      'node' => 'Plain\\Generated\\IndexedDocumentEdgeNodeArgs',
    ),
    'DeleteKnowledgeSourceOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteKnowledgeSourceOutputErrorArgs',
    ),
    'CreateKnowledgeSourceOutput' => 
    array (
      'knowledgeSource' => 'Plain\\Generated\\CreateKnowledgeSourceOutputKnowledgeSourceArgs',
      'error' => 'Plain\\Generated\\CreateKnowledgeSourceOutputErrorArgs',
    ),
    'KnowledgeSourceConnection' => 
    array (
      'edges' => 'Plain\\Generated\\KnowledgeSourceConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\KnowledgeSourceConnectionPageInfoArgs',
    ),
    'KnowledgeSourceEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\KnowledgeSourceEdgeCursorArgs',
      'node' => 'Plain\\Generated\\KnowledgeSourceEdgeNodeArgs',
    ),
    'KnowledgeSourceSitemap' => 
    array (
      'id' => 'Plain\\Generated\\KnowledgeSourceSitemapIdArgs',
      'type' => 'Plain\\Generated\\KnowledgeSourceSitemapTypeArgs',
      'url' => 'Plain\\Generated\\KnowledgeSourceSitemapUrlArgs',
      'labelTypes' => 'Plain\\Generated\\KnowledgeSourceSitemapLabelTypesArgs',
      'status' => 'Plain\\Generated\\KnowledgeSourceSitemapStatusArgs',
      'createdAt' => 'Plain\\Generated\\KnowledgeSourceSitemapCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\KnowledgeSourceSitemapCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\KnowledgeSourceSitemapUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\KnowledgeSourceSitemapUpdatedByArgs',
    ),
    'KnowledgeSourceUrl' => 
    array (
      'id' => 'Plain\\Generated\\KnowledgeSourceUrlIdArgs',
      'type' => 'Plain\\Generated\\KnowledgeSourceUrlTypeArgs',
      'url' => 'Plain\\Generated\\KnowledgeSourceUrlUrlArgs',
      'labelTypes' => 'Plain\\Generated\\KnowledgeSourceUrlLabelTypesArgs',
      'status' => 'Plain\\Generated\\KnowledgeSourceUrlStatusArgs',
      'createdAt' => 'Plain\\Generated\\KnowledgeSourceUrlCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\KnowledgeSourceUrlCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\KnowledgeSourceUrlUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\KnowledgeSourceUrlUpdatedByArgs',
    ),
    'IndexingStatusPending' => 
    array (
      'startedAt' => 'Plain\\Generated\\IndexingStatusPendingStartedAtArgs',
    ),
    'IndexingStatusIndexed' => 
    array (
      'indexedAt' => 'Plain\\Generated\\IndexingStatusIndexedIndexedAtArgs',
    ),
    'IndexingStatusFailed' => 
    array (
      'reason' => 'Plain\\Generated\\IndexingStatusFailedReasonArgs',
      'failedAt' => 'Plain\\Generated\\IndexingStatusFailedFailedAtArgs',
    ),
    'IndexedDocumentSearchResult' => 
    array (
      'content' => 'Plain\\Generated\\IndexedDocumentSearchResultContentArgs',
      'indexedDocument' => 'Plain\\Generated\\IndexedDocumentSearchResultIndexedDocumentArgs',
    ),
    'HelpCenterArticleSearchResult' => 
    array (
      'content' => 'Plain\\Generated\\HelpCenterArticleSearchResultContentArgs',
      'helpCenterArticle' => 'Plain\\Generated\\HelpCenterArticleSearchResultHelpCenterArticleArgs',
      'helpCenter' => 'Plain\\Generated\\HelpCenterArticleSearchResultHelpCenterArgs',
    ),
    'CreateThreadDiscussionOutput' => 
    array (
      'threadDiscussion' => 'Plain\\Generated\\CreateThreadDiscussionOutputThreadDiscussionArgs',
      'error' => 'Plain\\Generated\\CreateThreadDiscussionOutputErrorArgs',
    ),
    'SendThreadDiscussionMessageOutput' => 
    array (
      'threadDiscussionMessage' => 'Plain\\Generated\\SendThreadDiscussionMessageOutputThreadDiscussionMessageArgs',
      'error' => 'Plain\\Generated\\SendThreadDiscussionMessageOutputErrorArgs',
    ),
    'MarkThreadDiscussionAsResolvedOutput' => 
    array (
      'error' => 'Plain\\Generated\\MarkThreadDiscussionAsResolvedOutputErrorArgs',
    ),
    'UpdateCompanyTierOutput' => 
    array (
      'companyTierMembership' => 'Plain\\Generated\\UpdateCompanyTierOutputCompanyTierMembershipArgs',
      'error' => 'Plain\\Generated\\UpdateCompanyTierOutputErrorArgs',
    ),
    'ChangeThreadCustomerOutput' => 
    array (
      'thread' => 'Plain\\Generated\\ChangeThreadCustomerOutputThreadArgs',
      'error' => 'Plain\\Generated\\ChangeThreadCustomerOutputErrorArgs',
    ),
    'UpdateTenantTierOutput' => 
    array (
      'tenantTierMembership' => 'Plain\\Generated\\UpdateTenantTierOutputTenantTierMembershipArgs',
      'error' => 'Plain\\Generated\\UpdateTenantTierOutputErrorArgs',
    ),
    'AddMembersToTierOutput' => 
    array (
      'memberships' => 'Plain\\Generated\\AddMembersToTierOutputMembershipsArgs',
      'error' => 'Plain\\Generated\\AddMembersToTierOutputErrorArgs',
    ),
    'RemoveMembersFromTierOutput' => 
    array (
      'memberships' => 'Plain\\Generated\\RemoveMembersFromTierOutputMembershipsArgs',
      'error' => 'Plain\\Generated\\RemoveMembersFromTierOutputErrorArgs',
    ),
    'CreateTierOutput' => 
    array (
      'tier' => 'Plain\\Generated\\CreateTierOutputTierArgs',
      'error' => 'Plain\\Generated\\CreateTierOutputErrorArgs',
    ),
    'UpdateTierOutput' => 
    array (
      'tier' => 'Plain\\Generated\\UpdateTierOutputTierArgs',
      'error' => 'Plain\\Generated\\UpdateTierOutputErrorArgs',
    ),
    'DeleteTierOutput' => 
    array (
      'tier' => 'Plain\\Generated\\DeleteTierOutputTierArgs',
      'error' => 'Plain\\Generated\\DeleteTierOutputErrorArgs',
    ),
    'CreateServiceLevelAgreementOutput' => 
    array (
      'serviceLevelAgreement' => 'Plain\\Generated\\CreateServiceLevelAgreementOutputServiceLevelAgreementArgs',
      'error' => 'Plain\\Generated\\CreateServiceLevelAgreementOutputErrorArgs',
    ),
    'UpdateServiceLevelAgreementOutput' => 
    array (
      'serviceLevelAgreement' => 'Plain\\Generated\\UpdateServiceLevelAgreementOutputServiceLevelAgreementArgs',
      'error' => 'Plain\\Generated\\UpdateServiceLevelAgreementOutputErrorArgs',
    ),
    'DeleteServiceLevelAgreementOutput' => 
    array (
      'serviceLevelAgreement' => 'Plain\\Generated\\DeleteServiceLevelAgreementOutputServiceLevelAgreementArgs',
      'error' => 'Plain\\Generated\\DeleteServiceLevelAgreementOutputErrorArgs',
    ),
    'UpsertCompanyOutput' => 
    array (
      'company' => 'Plain\\Generated\\UpsertCompanyOutputCompanyArgs',
      'result' => 'Plain\\Generated\\UpsertCompanyOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertCompanyOutputErrorArgs',
    ),
    'Tenant' => 
    array (
      'id' => 'Plain\\Generated\\TenantIdArgs',
      'name' => 'Plain\\Generated\\TenantNameArgs',
      'externalId' => 'Plain\\Generated\\TenantExternalIdArgs',
      'url' => 'Plain\\Generated\\TenantUrlArgs',
      'source' => 'Plain\\Generated\\TenantSourceArgs',
      'tier' => 'Plain\\Generated\\TenantTierArgs',
      'tenantFields' => 'Plain\\Generated\\TenantTenantFieldsArgs',
      'createdAt' => 'Plain\\Generated\\TenantCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\TenantCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\TenantUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\TenantUpdatedByArgs',
    ),
    'TenantFieldSchema' => 
    array (
      'id' => 'Plain\\Generated\\TenantFieldSchemaIdArgs',
      'source' => 'Plain\\Generated\\TenantFieldSchemaSourceArgs',
      'externalFieldId' => 'Plain\\Generated\\TenantFieldSchemaExternalFieldIdArgs',
      'label' => 'Plain\\Generated\\TenantFieldSchemaLabelArgs',
      'type' => 'Plain\\Generated\\TenantFieldSchemaTypeArgs',
      'options' => 'Plain\\Generated\\TenantFieldSchemaOptionsArgs',
      'isVisible' => 'Plain\\Generated\\TenantFieldSchemaIsVisibleArgs',
      'order' => 'Plain\\Generated\\TenantFieldSchemaOrderArgs',
      'mapsTo' => 'Plain\\Generated\\TenantFieldSchemaMapsToArgs',
      'createdAt' => 'Plain\\Generated\\TenantFieldSchemaCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\TenantFieldSchemaCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\TenantFieldSchemaUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\TenantFieldSchemaUpdatedByArgs',
    ),
    'TenantFieldSchemaEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TenantFieldSchemaEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TenantFieldSchemaEdgeNodeArgs',
    ),
    'TenantFieldSchemaConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TenantFieldSchemaConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TenantFieldSchemaConnectionPageInfoArgs',
    ),
    'UpsertTenantFieldSchemaOutput' => 
    array (
      'tenantFieldSchemas' => 'Plain\\Generated\\UpsertTenantFieldSchemaOutputTenantFieldSchemasArgs',
      'result' => 'Plain\\Generated\\UpsertTenantFieldSchemaOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertTenantFieldSchemaOutputErrorArgs',
    ),
    'UpsertTenantFieldOutput' => 
    array (
      'tenantField' => 'Plain\\Generated\\UpsertTenantFieldOutputTenantFieldArgs',
      'result' => 'Plain\\Generated\\UpsertTenantFieldOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertTenantFieldOutputErrorArgs',
    ),
    'DeleteTenantFieldOutput' => 
    array (
      'tenantField' => 'Plain\\Generated\\DeleteTenantFieldOutputTenantFieldArgs',
      'error' => 'Plain\\Generated\\DeleteTenantFieldOutputErrorArgs',
    ),
    'DeleteTenantFieldSchemaOutput' => 
    array (
      'tenantFieldSchema' => 'Plain\\Generated\\DeleteTenantFieldSchemaOutputTenantFieldSchemaArgs',
      'error' => 'Plain\\Generated\\DeleteTenantFieldSchemaOutputErrorArgs',
    ),
    'SetupTenantFieldSchemaMappingOutput' => 
    array (
      'tenantFieldSchema' => 'Plain\\Generated\\SetupTenantFieldSchemaMappingOutputTenantFieldSchemaArgs',
      'error' => 'Plain\\Generated\\SetupTenantFieldSchemaMappingOutputErrorArgs',
    ),
    'RemoveTenantFieldSchemaMappingOutput' => 
    array (
      'tenantFieldSchema' => 'Plain\\Generated\\RemoveTenantFieldSchemaMappingOutputTenantFieldSchemaArgs',
      'error' => 'Plain\\Generated\\RemoveTenantFieldSchemaMappingOutputErrorArgs',
    ),
    'TenantFieldStringValue' => 
    array (
      'stringValue' => 'Plain\\Generated\\TenantFieldStringValueStringValueArgs',
    ),
    'TenantFieldNumberValue' => 
    array (
      'numberValue' => 'Plain\\Generated\\TenantFieldNumberValueNumberValueArgs',
    ),
    'TenantFieldBooleanValue' => 
    array (
      'booleanValue' => 'Plain\\Generated\\TenantFieldBooleanValueBooleanValueArgs',
    ),
    'TenantFieldStringArrayValue' => 
    array (
      'arrayValue' => 'Plain\\Generated\\TenantFieldStringArrayValueArrayValueArgs',
    ),
    'TenantFieldDateTimeValue' => 
    array (
      'dateValue' => 'Plain\\Generated\\TenantFieldDateTimeValueDateValueArgs',
    ),
    'TenantField' => 
    array (
      'id' => 'Plain\\Generated\\TenantFieldIdArgs',
      'externalFieldId' => 'Plain\\Generated\\TenantFieldExternalFieldIdArgs',
      'value' => 'Plain\\Generated\\TenantFieldValueArgs',
      'createdAt' => 'Plain\\Generated\\TenantFieldCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\TenantFieldCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\TenantFieldUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\TenantFieldUpdatedByArgs',
    ),
    'UpsertTenantOutput' => 
    array (
      'tenant' => 'Plain\\Generated\\UpsertTenantOutputTenantArgs',
      'result' => 'Plain\\Generated\\UpsertTenantOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertTenantOutputErrorArgs',
    ),
    'DeleteTenantOutput' => 
    array (
      'tenant' => 'Plain\\Generated\\DeleteTenantOutputTenantArgs',
      'error' => 'Plain\\Generated\\DeleteTenantOutputErrorArgs',
    ),
    'UpdateCustomerCompanyOutput' => 
    array (
      'customer' => 'Plain\\Generated\\UpdateCustomerCompanyOutputCustomerArgs',
      'error' => 'Plain\\Generated\\UpdateCustomerCompanyOutputErrorArgs',
    ),
    'SendMSTeamsMessageOutput' => 
    array (
      'msTeamsMessage' => 'Plain\\Generated\\SendMSTeamsMessageOutputMsTeamsMessageArgs',
      'error' => 'Plain\\Generated\\SendMSTeamsMessageOutputErrorArgs',
    ),
    'SendSlackMessageOutput' => 
    array (
      'error' => 'Plain\\Generated\\SendSlackMessageOutputErrorArgs',
    ),
    'ShareThreadToUserInSlackOutput' => 
    array (
      'error' => 'Plain\\Generated\\ShareThreadToUserInSlackOutputErrorArgs',
    ),
    'SendDiscordMessageOutput' => 
    array (
      'discordMessage' => 'Plain\\Generated\\SendDiscordMessageOutputDiscordMessageArgs',
      'error' => 'Plain\\Generated\\SendDiscordMessageOutputErrorArgs',
    ),
    'ToggleSlackMessageReactionOutput' => 
    array (
      'error' => 'Plain\\Generated\\ToggleSlackMessageReactionOutputErrorArgs',
    ),
    'ForkThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\ForkThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\ForkThreadOutputErrorArgs',
    ),
    'ReplyToThreadOutput' => 
    array (
      'error' => 'Plain\\Generated\\ReplyToThreadOutputErrorArgs',
    ),
    'ThreadSearchResult' => 
    array (
      'thread' => 'Plain\\Generated\\ThreadSearchResultThreadArgs',
    ),
    'ThreadSearchResultEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ThreadSearchResultEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ThreadSearchResultEdgeNodeArgs',
    ),
    'ThreadSearchResultConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ThreadSearchResultConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ThreadSearchResultConnectionPageInfoArgs',
    ),
    'UpsertMyEmailSignatureOutput' => 
    array (
      'emailSignature' => 'Plain\\Generated\\UpsertMyEmailSignatureOutputEmailSignatureArgs',
      'result' => 'Plain\\Generated\\UpsertMyEmailSignatureOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertMyEmailSignatureOutputErrorArgs',
    ),
    'MarkThreadAsDoneOutput' => 
    array (
      'thread' => 'Plain\\Generated\\MarkThreadAsDoneOutputThreadArgs',
      'error' => 'Plain\\Generated\\MarkThreadAsDoneOutputErrorArgs',
    ),
    'MarkThreadAsTodoOutput' => 
    array (
      'thread' => 'Plain\\Generated\\MarkThreadAsTodoOutputThreadArgs',
      'error' => 'Plain\\Generated\\MarkThreadAsTodoOutputErrorArgs',
    ),
    'ChangeThreadPriorityOutput' => 
    array (
      'thread' => 'Plain\\Generated\\ChangeThreadPriorityOutputThreadArgs',
      'error' => 'Plain\\Generated\\ChangeThreadPriorityOutputErrorArgs',
    ),
    'UpdateThreadTitleOutput' => 
    array (
      'thread' => 'Plain\\Generated\\UpdateThreadTitleOutputThreadArgs',
      'error' => 'Plain\\Generated\\UpdateThreadTitleOutputErrorArgs',
    ),
    'SnoozeThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\SnoozeThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\SnoozeThreadOutputErrorArgs',
    ),
    'AssignThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\AssignThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\AssignThreadOutputErrorArgs',
    ),
    'UnassignThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\UnassignThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\UnassignThreadOutputErrorArgs',
    ),
    'AddAdditionalAssigneesOutput' => 
    array (
      'thread' => 'Plain\\Generated\\AddAdditionalAssigneesOutputThreadArgs',
      'error' => 'Plain\\Generated\\AddAdditionalAssigneesOutputErrorArgs',
    ),
    'RemoveAdditionalAssigneesOutput' => 
    array (
      'thread' => 'Plain\\Generated\\RemoveAdditionalAssigneesOutputThreadArgs',
      'error' => 'Plain\\Generated\\RemoveAdditionalAssigneesOutputErrorArgs',
    ),
    'ThreadStatusDetailCreated' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailCreatedStatusChangedAtArgs',
      'createdAt' => 'Plain\\Generated\\ThreadStatusDetailCreatedCreatedAtArgs',
    ),
    'ThreadStatusDetailNewReply' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailNewReplyStatusChangedAtArgs',
      'newReplyAt' => 'Plain\\Generated\\ThreadStatusDetailNewReplyNewReplyAtArgs',
    ),
    'ThreadStatusDetailReplied' => 
    array (
      'repliedAt' => 'Plain\\Generated\\ThreadStatusDetailRepliedRepliedAtArgs',
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailRepliedStatusChangedAtArgs',
    ),
    'ThreadStatusDetailThreadLinkUpdated' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailThreadLinkUpdatedStatusChangedAtArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadStatusDetailThreadLinkUpdatedUpdatedAtArgs',
      'linearIssueId' => 'Plain\\Generated\\ThreadStatusDetailThreadLinkUpdatedLinearIssueIdArgs',
    ),
    'ThreadStatusDetailLinearUpdated' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailLinearUpdatedStatusChangedAtArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadStatusDetailLinearUpdatedUpdatedAtArgs',
      'linearIssueId' => 'Plain\\Generated\\ThreadStatusDetailLinearUpdatedLinearIssueIdArgs',
    ),
    'ThreadStatusDetailInProgress' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailInProgressStatusChangedAtArgs',
    ),
    'ThreadStatusDetailThreadDiscussionResolved' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailThreadDiscussionResolvedStatusChangedAtArgs',
      'threadDiscussionId' => 'Plain\\Generated\\ThreadStatusDetailThreadDiscussionResolvedThreadDiscussionIdArgs',
    ),
    'ThreadStatusDetailUnsnoozed' => 
    array (
      'snoozedAt' => 'Plain\\Generated\\ThreadStatusDetailUnsnoozedSnoozedAtArgs',
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailUnsnoozedStatusChangedAtArgs',
    ),
    'ThreadStatusDetailSnoozed' => 
    array (
      'snoozedAt' => 'Plain\\Generated\\ThreadStatusDetailSnoozedSnoozedAtArgs',
      'snoozedUntil' => 'Plain\\Generated\\ThreadStatusDetailSnoozedSnoozedUntilArgs',
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailSnoozedStatusChangedAtArgs',
    ),
    'ThreadStatusDetailWaitingForDuration' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailWaitingForDurationStatusChangedAtArgs',
      'waitingUntil' => 'Plain\\Generated\\ThreadStatusDetailWaitingForDurationWaitingUntilArgs',
    ),
    'ThreadStatusDetailWaitingForCustomer' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailWaitingForCustomerStatusChangedAtArgs',
    ),
    'ThreadStatusDetailIgnored' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailIgnoredStatusChangedAtArgs',
    ),
    'ThreadStatusDetailDoneManuallySet' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailDoneManuallySetStatusChangedAtArgs',
    ),
    'ThreadStatusDetailDoneAutomaticallySet' => 
    array (
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusDetailDoneAutomaticallySetStatusChangedAtArgs',
      'afterSeconds' => 'Plain\\Generated\\ThreadStatusDetailDoneAutomaticallySetAfterSecondsArgs',
    ),
    'AgentStatusDetailInProgress' => 
    array (
      'type' => 'Plain\\Generated\\AgentStatusDetailInProgressTypeArgs',
    ),
    'AgentStatusDetailHandedOff' => 
    array (
      'type' => 'Plain\\Generated\\AgentStatusDetailHandedOffTypeArgs',
      'reason' => 'Plain\\Generated\\AgentStatusDetailHandedOffReasonArgs',
    ),
    'AgentStatusDetailHandled' => 
    array (
      'type' => 'Plain\\Generated\\AgentStatusDetailHandledTypeArgs',
    ),
    'ThreadMessageInfo' => 
    array (
      'timestamp' => 'Plain\\Generated\\ThreadMessageInfoTimestampArgs',
      'messageSource' => 'Plain\\Generated\\ThreadMessageInfoMessageSourceArgs',
      'id' => 'Plain\\Generated\\ThreadMessageInfoIdArgs',
      'companyId' => 'Plain\\Generated\\ThreadMessageInfoCompanyIdArgs',
      'createdAt' => 'Plain\\Generated\\ThreadMessageInfoCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadMessageInfoCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadMessageInfoUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadMessageInfoUpdatedByArgs',
    ),
    'SlackThreadChannelAssociation' => 
    array (
      'id' => 'Plain\\Generated\\SlackThreadChannelAssociationIdArgs',
      'companyId' => 'Plain\\Generated\\SlackThreadChannelAssociationCompanyIdArgs',
      'createdAt' => 'Plain\\Generated\\SlackThreadChannelAssociationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\SlackThreadChannelAssociationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\SlackThreadChannelAssociationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\SlackThreadChannelAssociationUpdatedByArgs',
      'connectedSlackChannelId' => 'Plain\\Generated\\SlackThreadChannelAssociationConnectedSlackChannelIdArgs',
    ),
    'CreateThreadChannelAssociationOutput' => 
    array (
      'threadChannelAssociation' => 'Plain\\Generated\\CreateThreadChannelAssociationOutputThreadChannelAssociationArgs',
      'error' => 'Plain\\Generated\\CreateThreadChannelAssociationOutputErrorArgs',
    ),
    'DeleteThreadChannelAssociationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteThreadChannelAssociationOutputErrorArgs',
    ),
    'SlackThreadChannelDetails' => 
    array (
      'slackChannelId' => 'Plain\\Generated\\SlackThreadChannelDetailsSlackChannelIdArgs',
      'slackChannelName' => 'Plain\\Generated\\SlackThreadChannelDetailsSlackChannelNameArgs',
      'slackTeamId' => 'Plain\\Generated\\SlackThreadChannelDetailsSlackTeamIdArgs',
      'slackTeamName' => 'Plain\\Generated\\SlackThreadChannelDetailsSlackTeamNameArgs',
    ),
    'ChatThreadChannelDetails' => 
    array (
      'customerReadAt' => 'Plain\\Generated\\ChatThreadChannelDetailsCustomerReadAtArgs',
    ),
    'MSTeamsThreadChannelDetails' => 
    array (
      'msTeamsTeamId' => 'Plain\\Generated\\MSTeamsThreadChannelDetailsMsTeamsTeamIdArgs',
      'msTeamsTeamName' => 'Plain\\Generated\\MSTeamsThreadChannelDetailsMsTeamsTeamNameArgs',
      'msTeamsChannelId' => 'Plain\\Generated\\MSTeamsThreadChannelDetailsMsTeamsChannelIdArgs',
      'msTeamsChannelName' => 'Plain\\Generated\\MSTeamsThreadChannelDetailsMsTeamsChannelNameArgs',
    ),
    'DiscordThreadChannelDetails' => 
    array (
      'discordGuildId' => 'Plain\\Generated\\DiscordThreadChannelDetailsDiscordGuildIdArgs',
      'discordChannelId' => 'Plain\\Generated\\DiscordThreadChannelDetailsDiscordChannelIdArgs',
      'discordChannelName' => 'Plain\\Generated\\DiscordThreadChannelDetailsDiscordChannelNameArgs',
    ),
    'ImportThreadChannelDetails' => 
    array (
      'importSourceUrl' => 'Plain\\Generated\\ImportThreadChannelDetailsImportSourceUrlArgs',
      'importIntegrationKey' => 'Plain\\Generated\\ImportThreadChannelDetailsImportIntegrationKeyArgs',
    ),
    'Thread' => 
    array (
      'id' => 'Plain\\Generated\\ThreadIdArgs',
      'ref' => 'Plain\\Generated\\ThreadRefArgs',
      'customer' => 'Plain\\Generated\\ThreadCustomerArgs',
      'title' => 'Plain\\Generated\\ThreadTitleArgs',
      'description' => 'Plain\\Generated\\ThreadDescriptionArgs',
      'previewText' => 'Plain\\Generated\\ThreadPreviewTextArgs',
      'priority' => 'Plain\\Generated\\ThreadPriorityArgs',
      'externalId' => 'Plain\\Generated\\ThreadExternalIdArgs',
      'status' => 'Plain\\Generated\\ThreadStatusArgs',
      'statusChangedAt' => 'Plain\\Generated\\ThreadStatusChangedAtArgs',
      'statusChangedBy' => 'Plain\\Generated\\ThreadStatusChangedByArgs',
      'statusDetail' => 'Plain\\Generated\\ThreadStatusDetailArgs',
      'agentStatus' => 'Plain\\Generated\\ThreadAgentStatusArgs',
      'agentStatusDetail' => 'Plain\\Generated\\ThreadAgentStatusDetailArgs',
      'agentStatusUpdatedAt' => 'Plain\\Generated\\ThreadAgentStatusUpdatedAtArgs',
      'agentStatusUpdatedBy' => 'Plain\\Generated\\ThreadAgentStatusUpdatedByArgs',
      'assignedTo' => 'Plain\\Generated\\ThreadAssignedToArgs',
      'assignedAt' => 'Plain\\Generated\\ThreadAssignedAtArgs',
      'additionalAssignees' => 'Plain\\Generated\\ThreadAdditionalAssigneesArgs',
      'labels' => 'Plain\\Generated\\ThreadLabelsArgs',
      'links' => 'Plain\\Generated\\ThreadLinksArgs',
      'threadFields' => 'Plain\\Generated\\ThreadThreadFieldsArgs',
      'threadDiscussions' => 'Plain\\Generated\\ThreadThreadDiscussionsArgs',
      'timelineEntries' => 'Plain\\Generated\\ThreadTimelineEntriesArgs',
      'firstInboundMessageInfo' => 'Plain\\Generated\\ThreadFirstInboundMessageInfoArgs',
      'firstOutboundMessageInfo' => 'Plain\\Generated\\ThreadFirstOutboundMessageInfoArgs',
      'lastInboundMessageInfo' => 'Plain\\Generated\\ThreadLastInboundMessageInfoArgs',
      'lastOutboundMessageInfo' => 'Plain\\Generated\\ThreadLastOutboundMessageInfoArgs',
      'createdAt' => 'Plain\\Generated\\ThreadCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ThreadCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ThreadUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ThreadUpdatedByArgs',
      'supportEmailAddresses' => 'Plain\\Generated\\ThreadSupportEmailAddressesArgs',
      'tenant' => 'Plain\\Generated\\ThreadTenantArgs',
      'tier' => 'Plain\\Generated\\ThreadTierArgs',
      'serviceLevelAgreementStatusSummary' => 'Plain\\Generated\\ThreadServiceLevelAgreementStatusSummaryArgs',
      'channel' => 'Plain\\Generated\\ThreadChannelArgs',
      'channelDetails' => 'Plain\\Generated\\ThreadChannelDetailsArgs',
      'participants' => 'Plain\\Generated\\ThreadParticipantsArgs',
      'surveyResponse' => 'Plain\\Generated\\ThreadSurveyResponseArgs',
      'escalationDetails' => 'Plain\\Generated\\ThreadEscalationDetailsArgs',
    ),
    'ThreadEscalationDetails' => 
    array (
      'escalationPath' => 'Plain\\Generated\\ThreadEscalationDetailsEscalationPathArgs',
      'nextEscalationPathStep' => 'Plain\\Generated\\ThreadEscalationDetailsNextEscalationPathStepArgs',
    ),
    'SurveyResponse' => 
    array (
      'id' => 'Plain\\Generated\\SurveyResponseIdArgs',
      'sentiment' => 'Plain\\Generated\\SurveyResponseSentimentArgs',
      'rating' => 'Plain\\Generated\\SurveyResponseRatingArgs',
      'surveyId' => 'Plain\\Generated\\SurveyResponseSurveyIdArgs',
      'comment' => 'Plain\\Generated\\SurveyResponseCommentArgs',
      'respondedAt' => 'Plain\\Generated\\SurveyResponseRespondedAtArgs',
      'createdAt' => 'Plain\\Generated\\SurveyResponseCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\SurveyResponseCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\SurveyResponseUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\SurveyResponseUpdatedByArgs',
    ),
    'ActorEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ActorEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ActorEdgeNodeArgs',
    ),
    'ActorConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ActorConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ActorConnectionPageInfoArgs',
    ),
    'ServiceLevelAgreementStatusDetailPending' => 
    array (
      'breachingAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailPendingBreachingAtArgs',
    ),
    'ServiceLevelAgreementStatusDetailImminentBreach' => 
    array (
      'breachingAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailImminentBreachBreachingAtArgs',
    ),
    'ServiceLevelAgreementStatusDetailBreaching' => 
    array (
      'breachedAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailBreachingBreachedAtArgs',
    ),
    'ServiceLevelAgreementStatusDetailAchieved' => 
    array (
      'achievedAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailAchievedAchievedAtArgs',
    ),
    'ServiceLevelAgreementStatusDetailBreached' => 
    array (
      'breachedAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailBreachedBreachedAtArgs',
      'completedAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailBreachedCompletedAtArgs',
    ),
    'ServiceLevelAgreementStatusDetailCancelled' => 
    array (
      'cancelledAt' => 'Plain\\Generated\\ServiceLevelAgreementStatusDetailCancelledCancelledAtArgs',
    ),
    'ServiceLevelAgreementStatusSummary' => 
    array (
      'firstResponseTime' => 'Plain\\Generated\\ServiceLevelAgreementStatusSummaryFirstResponseTimeArgs',
      'nextResponseTime' => 'Plain\\Generated\\ServiceLevelAgreementStatusSummaryNextResponseTimeArgs',
    ),
    'CreateThreadOutput' => 
    array (
      'thread' => 'Plain\\Generated\\CreateThreadOutputThreadArgs',
      'error' => 'Plain\\Generated\\CreateThreadOutputErrorArgs',
    ),
    'MarkCustomerAsSpamOutput' => 
    array (
      'customer' => 'Plain\\Generated\\MarkCustomerAsSpamOutputCustomerArgs',
      'error' => 'Plain\\Generated\\MarkCustomerAsSpamOutputErrorArgs',
    ),
    'UnmarkCustomerAsSpamOutput' => 
    array (
      'customer' => 'Plain\\Generated\\UnmarkCustomerAsSpamOutputCustomerArgs',
      'error' => 'Plain\\Generated\\UnmarkCustomerAsSpamOutputErrorArgs',
    ),
    'SubscriptionEventType' => 
    array (
      'eventType' => 'Plain\\Generated\\SubscriptionEventTypeEventTypeArgs',
      'description' => 'Plain\\Generated\\SubscriptionEventTypeDescriptionArgs',
    ),
    'WebhookVersionEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WebhookVersionEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WebhookVersionEdgeNodeArgs',
    ),
    'WebhookVersionConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WebhookVersionConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WebhookVersionConnectionPageInfoArgs',
    ),
    'WebhookTargetEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\WebhookTargetEdgeCursorArgs',
      'node' => 'Plain\\Generated\\WebhookTargetEdgeNodeArgs',
    ),
    'WebhookTargetConnection' => 
    array (
      'edges' => 'Plain\\Generated\\WebhookTargetConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\WebhookTargetConnectionPageInfoArgs',
    ),
    'WebhookVersion' => 
    array (
      'version' => 'Plain\\Generated\\WebhookVersionVersionArgs',
      'isDeprecated' => 'Plain\\Generated\\WebhookVersionIsDeprecatedArgs',
      'isLatest' => 'Plain\\Generated\\WebhookVersionIsLatestArgs',
    ),
    'WebhookTarget' => 
    array (
      'id' => 'Plain\\Generated\\WebhookTargetIdArgs',
      'url' => 'Plain\\Generated\\WebhookTargetUrlArgs',
      'description' => 'Plain\\Generated\\WebhookTargetDescriptionArgs',
      'eventSubscriptions' => 'Plain\\Generated\\WebhookTargetEventSubscriptionsArgs',
      'version' => 'Plain\\Generated\\WebhookTargetVersionArgs',
      'isEnabled' => 'Plain\\Generated\\WebhookTargetIsEnabledArgs',
      'createdAt' => 'Plain\\Generated\\WebhookTargetCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WebhookTargetCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WebhookTargetUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WebhookTargetUpdatedByArgs',
    ),
    'WebhookTargetEventSubscription' => 
    array (
      'eventType' => 'Plain\\Generated\\WebhookTargetEventSubscriptionEventTypeArgs',
    ),
    'CreateWebhookTargetOutput' => 
    array (
      'webhookTarget' => 'Plain\\Generated\\CreateWebhookTargetOutputWebhookTargetArgs',
      'error' => 'Plain\\Generated\\CreateWebhookTargetOutputErrorArgs',
    ),
    'UpdateWebhookTargetOutput' => 
    array (
      'webhookTarget' => 'Plain\\Generated\\UpdateWebhookTargetOutputWebhookTargetArgs',
      'error' => 'Plain\\Generated\\UpdateWebhookTargetOutputErrorArgs',
    ),
    'DeleteWebhookTargetOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteWebhookTargetOutputErrorArgs',
    ),
    'ReorderCustomerCardConfigsOutput' => 
    array (
      'customerCardConfigs' => 'Plain\\Generated\\ReorderCustomerCardConfigsOutputCustomerCardConfigsArgs',
      'error' => 'Plain\\Generated\\ReorderCustomerCardConfigsOutputErrorArgs',
    ),
    'CreateCustomerCardConfigOutput' => 
    array (
      'customerCardConfig' => 'Plain\\Generated\\CreateCustomerCardConfigOutputCustomerCardConfigArgs',
      'error' => 'Plain\\Generated\\CreateCustomerCardConfigOutputErrorArgs',
    ),
    'UpdateCustomerCardConfigOutput' => 
    array (
      'customerCardConfig' => 'Plain\\Generated\\UpdateCustomerCardConfigOutputCustomerCardConfigArgs',
      'error' => 'Plain\\Generated\\UpdateCustomerCardConfigOutputErrorArgs',
    ),
    'DeleteCustomerCardConfigOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteCustomerCardConfigOutputErrorArgs',
    ),
    'ReloadCustomerCardInstanceOutput' => 
    array (
      'customerCardInstance' => 'Plain\\Generated\\ReloadCustomerCardInstanceOutputCustomerCardInstanceArgs',
      'error' => 'Plain\\Generated\\ReloadCustomerCardInstanceOutputErrorArgs',
    ),
    'UpdateSettingOutput' => 
    array (
      'setting' => 'Plain\\Generated\\UpdateSettingOutputSettingArgs',
      'error' => 'Plain\\Generated\\UpdateSettingOutputErrorArgs',
    ),
    'CreateMySlackIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateMySlackIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateMySlackIntegrationOutputErrorArgs',
    ),
    'CreateUserAuthSlackIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateUserAuthSlackIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateUserAuthSlackIntegrationOutputErrorArgs',
    ),
    'CreateWorkspaceSlackIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceSlackIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceSlackIntegrationOutputErrorArgs',
    ),
    'RefreshWorkspaceSlackChannelIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\RefreshWorkspaceSlackChannelIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\RefreshWorkspaceSlackChannelIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceSlackIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\DeleteWorkspaceSlackIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceSlackIntegrationOutputErrorArgs',
    ),
    'CreateWorkspaceSlackChannelIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceSlackChannelIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceSlackChannelIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceSlackChannelIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\DeleteWorkspaceSlackChannelIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceSlackChannelIntegrationOutputErrorArgs',
    ),
    'DeleteMySlackIntegrationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteMySlackIntegrationOutputErrorArgs',
    ),
    'DeleteUserAuthSlackIntegrationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteUserAuthSlackIntegrationOutputErrorArgs',
    ),
    'SlackUserConnection' => 
    array (
      'edges' => 'Plain\\Generated\\SlackUserConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\SlackUserConnectionPageInfoArgs',
    ),
    'SlackUserEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\SlackUserEdgeCursorArgs',
      'node' => 'Plain\\Generated\\SlackUserEdgeNodeArgs',
    ),
    'SlackUser' => 
    array (
      'id' => 'Plain\\Generated\\SlackUserIdArgs',
      'slackUserId' => 'Plain\\Generated\\SlackUserSlackUserIdArgs',
      'slackAvatarUrl72px' => 'Plain\\Generated\\SlackUserSlackAvatarUrl72pxArgs',
      'slackHandle' => 'Plain\\Generated\\SlackUserSlackHandleArgs',
      'fullName' => 'Plain\\Generated\\SlackUserFullNameArgs',
      'isInChannel' => 'Plain\\Generated\\SlackUserIsInChannelArgs',
      'createdAt' => 'Plain\\Generated\\SlackUserCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\SlackUserCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\SlackUserUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\SlackUserUpdatedByArgs',
    ),
    'SlackChannelMembership' => 
    array (
      'slackChannelId' => 'Plain\\Generated\\SlackChannelMembershipSlackChannelIdArgs',
    ),
    'BulkJoinSlackChannelsOutput' => 
    array (
      'error' => 'Plain\\Generated\\BulkJoinSlackChannelsOutputErrorArgs',
    ),
    'UpdateConnectedSlackChannelOutput' => 
    array (
      'connectedSlackChannel' => 'Plain\\Generated\\UpdateConnectedSlackChannelOutputConnectedSlackChannelArgs',
      'error' => 'Plain\\Generated\\UpdateConnectedSlackChannelOutputErrorArgs',
    ),
    'ConnectedSlackChannelConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\ConnectedSlackChannelConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\ConnectedSlackChannelConnectionEdgesArgs',
      'totalCount' => 'Plain\\Generated\\ConnectedSlackChannelConnectionTotalCountArgs',
    ),
    'ConnectedSlackChannelEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ConnectedSlackChannelEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ConnectedSlackChannelEdgeNodeArgs',
    ),
    'ConnectedSlackChannel' => 
    array (
      'id' => 'Plain\\Generated\\ConnectedSlackChannelIdArgs',
      'slackTeamId' => 'Plain\\Generated\\ConnectedSlackChannelSlackTeamIdArgs',
      'slackChannelId' => 'Plain\\Generated\\ConnectedSlackChannelSlackChannelIdArgs',
      'name' => 'Plain\\Generated\\ConnectedSlackChannelNameArgs',
      'channelType' => 'Plain\\Generated\\ConnectedSlackChannelChannelTypeArgs',
      'isEnabled' => 'Plain\\Generated\\ConnectedSlackChannelIsEnabledArgs',
      'isPrivate' => 'Plain\\Generated\\ConnectedSlackChannelIsPrivateArgs',
      'createdAt' => 'Plain\\Generated\\ConnectedSlackChannelCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ConnectedSlackChannelCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ConnectedSlackChannelUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ConnectedSlackChannelUpdatedByArgs',
      'threadChannelAssociations' => 'Plain\\Generated\\ConnectedSlackChannelThreadChannelAssociationsArgs',
    ),
    'ConnectedDiscordChannel' => 
    array (
      'id' => 'Plain\\Generated\\ConnectedDiscordChannelIdArgs',
      'discordGuildId' => 'Plain\\Generated\\ConnectedDiscordChannelDiscordGuildIdArgs',
      'discordChannelId' => 'Plain\\Generated\\ConnectedDiscordChannelDiscordChannelIdArgs',
      'name' => 'Plain\\Generated\\ConnectedDiscordChannelNameArgs',
      'isEnabled' => 'Plain\\Generated\\ConnectedDiscordChannelIsEnabledArgs',
      'createdAt' => 'Plain\\Generated\\ConnectedDiscordChannelCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ConnectedDiscordChannelCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ConnectedDiscordChannelUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ConnectedDiscordChannelUpdatedByArgs',
    ),
    'ConnectedDiscordChannelConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\ConnectedDiscordChannelConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\ConnectedDiscordChannelConnectionEdgesArgs',
    ),
    'ConnectedDiscordChannelEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ConnectedDiscordChannelEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ConnectedDiscordChannelEdgeNodeArgs',
    ),
    'CreateWorkspaceDiscordChannelIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceDiscordChannelIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceDiscordChannelIntegrationOutputErrorArgs',
    ),
    'CreateWorkspaceDiscordIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceDiscordIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceDiscordIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceDiscordIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\DeleteWorkspaceDiscordIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceDiscordIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceDiscordChannelIntegrationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteWorkspaceDiscordChannelIntegrationOutputErrorArgs',
    ),
    'DeleteUserAuthDiscordChannelIntegrationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteUserAuthDiscordChannelIntegrationOutputErrorArgs',
    ),
    'RefreshConnectedDiscordChannelsOutput' => 
    array (
      'error' => 'Plain\\Generated\\RefreshConnectedDiscordChannelsOutputErrorArgs',
    ),
    'UpdateConnectedDiscordChannelOutput' => 
    array (
      'connectedDiscordChannel' => 'Plain\\Generated\\UpdateConnectedDiscordChannelOutputConnectedDiscordChannelArgs',
      'error' => 'Plain\\Generated\\UpdateConnectedDiscordChannelOutputErrorArgs',
    ),
    'CreateUserAuthDiscordChannelIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateUserAuthDiscordChannelIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateUserAuthDiscordChannelIntegrationOutputErrorArgs',
    ),
    'UserAuthDiscordChannelIntegration' => 
    array (
      'id' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationIdArgs',
      'discordGuildId' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationDiscordGuildIdArgs',
      'discordUserId' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationDiscordUserIdArgs',
      'discordUsername' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationDiscordUsernameArgs',
      'discordGlobalName' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationDiscordGlobalNameArgs',
      'discordUserEmail' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationDiscordUserEmailArgs',
      'createdAt' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationUpdatedByArgs',
    ),
    'UserAuthDiscordChannelIntegrationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationEdgeNodeArgs',
    ),
    'UserAuthDiscordChannelIntegrationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\UserAuthDiscordChannelIntegrationConnectionPageInfoArgs',
    ),
    'CreateMyLinearIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateMyLinearIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateMyLinearIntegrationOutputErrorArgs',
    ),
    'DeleteMyLinearIntegrationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteMyLinearIntegrationOutputErrorArgs',
    ),
    'CreateGithubUserAuthIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateGithubUserAuthIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateGithubUserAuthIntegrationOutputErrorArgs',
    ),
    'DeleteGithubUserAuthIntegrationOutput' => 
    array (
      'deletedIntegrationId' => 'Plain\\Generated\\DeleteGithubUserAuthIntegrationOutputDeletedIntegrationIdArgs',
      'error' => 'Plain\\Generated\\DeleteGithubUserAuthIntegrationOutputErrorArgs',
    ),
    'CreateWorkspaceCursorIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceCursorIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceCursorIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceCursorIntegrationOutput' => 
    array (
      'id' => 'Plain\\Generated\\DeleteWorkspaceCursorIntegrationOutputIdArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceCursorIntegrationOutputErrorArgs',
    ),
    'ConnectedMSTeamsChannelConnection' => 
    array (
      'pageInfo' => 'Plain\\Generated\\ConnectedMSTeamsChannelConnectionPageInfoArgs',
      'edges' => 'Plain\\Generated\\ConnectedMSTeamsChannelConnectionEdgesArgs',
      'totalCount' => 'Plain\\Generated\\ConnectedMSTeamsChannelConnectionTotalCountArgs',
    ),
    'ConnectedMSTeamsChannelEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ConnectedMSTeamsChannelEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ConnectedMSTeamsChannelEdgeNodeArgs',
    ),
    'ConnectedMSTeamsChannel' => 
    array (
      'id' => 'Plain\\Generated\\ConnectedMSTeamsChannelIdArgs',
      'workspaceId' => 'Plain\\Generated\\ConnectedMSTeamsChannelWorkspaceIdArgs',
      'msTeamsTenantId' => 'Plain\\Generated\\ConnectedMSTeamsChannelMsTeamsTenantIdArgs',
      'msTeamsTeamId' => 'Plain\\Generated\\ConnectedMSTeamsChannelMsTeamsTeamIdArgs',
      'msTeamsChannelId' => 'Plain\\Generated\\ConnectedMSTeamsChannelMsTeamsChannelIdArgs',
      'name' => 'Plain\\Generated\\ConnectedMSTeamsChannelNameArgs',
      'createdAt' => 'Plain\\Generated\\ConnectedMSTeamsChannelCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ConnectedMSTeamsChannelCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ConnectedMSTeamsChannelUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ConnectedMSTeamsChannelUpdatedByArgs',
      'teamName' => 'Plain\\Generated\\ConnectedMSTeamsChannelTeamNameArgs',
    ),
    'CreateMyMSTeamsIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateMyMSTeamsIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateMyMSTeamsIntegrationOutputErrorArgs',
    ),
    'DeleteMyMSTeamsIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\DeleteMyMSTeamsIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\DeleteMyMSTeamsIntegrationOutputErrorArgs',
    ),
    'CreateWorkspaceMSTeamsIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\CreateWorkspaceMSTeamsIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceMSTeamsIntegrationOutputErrorArgs',
    ),
    'DeleteWorkspaceMSTeamsIntegrationOutput' => 
    array (
      'integration' => 'Plain\\Generated\\DeleteWorkspaceMSTeamsIntegrationOutputIntegrationArgs',
      'error' => 'Plain\\Generated\\DeleteWorkspaceMSTeamsIntegrationOutputErrorArgs',
    ),
    'WorkspaceMSTeamsIntegration' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationIdArgs',
      'msTeamsTenantId' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationMsTeamsTenantIdArgs',
      'isReinstallRequired' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationIsReinstallRequiredArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceMSTeamsIntegrationUpdatedByArgs',
    ),
    'TimelineEntryChange' => 
    array (
      'changeType' => 'Plain\\Generated\\TimelineEntryChangeChangeTypeArgs',
      'timelineEntry' => 'Plain\\Generated\\TimelineEntryChangeTimelineEntryArgs',
    ),
    'CustomerChange' => 
    array (
      'changeType' => 'Plain\\Generated\\CustomerChangeChangeTypeArgs',
      'customer' => 'Plain\\Generated\\CustomerChangeCustomerArgs',
    ),
    'ThreadChange' => 
    array (
      'changeType' => 'Plain\\Generated\\ThreadChangeChangeTypeArgs',
      'thread' => 'Plain\\Generated\\ThreadChangeThreadArgs',
    ),
    'UserChange' => 
    array (
      'changeType' => 'Plain\\Generated\\UserChangeChangeTypeArgs',
      'user' => 'Plain\\Generated\\UserChangeUserArgs',
    ),
    'CustomerCardInstanceChange' => 
    array (
      'changeType' => 'Plain\\Generated\\CustomerCardInstanceChangeChangeTypeArgs',
      'customerCardInstance' => 'Plain\\Generated\\CustomerCardInstanceChangeCustomerCardInstanceArgs',
    ),
    'ThreadFieldSchemaChange' => 
    array (
      'changeType' => 'Plain\\Generated\\ThreadFieldSchemaChangeChangeTypeArgs',
      'threadFieldSchema' => 'Plain\\Generated\\ThreadFieldSchemaChangeThreadFieldSchemaArgs',
    ),
    'SubscriptionAcknowledgement' => 
    array (
      'subscriptionId' => 'Plain\\Generated\\SubscriptionAcknowledgementSubscriptionIdArgs',
    ),
    'Subscription' => 
    array (
      'timelineChanges' => 'Plain\\Generated\\SubscriptionTimelineChangesArgs',
      'threadTimelineChanges' => 'Plain\\Generated\\SubscriptionThreadTimelineChangesArgs',
      'customerChanges' => 'Plain\\Generated\\SubscriptionCustomerChangesArgs',
      'threadChanges' => 'Plain\\Generated\\SubscriptionThreadChangesArgs',
      'customerCardInstanceChanges' => 'Plain\\Generated\\SubscriptionCustomerCardInstanceChangesArgs',
      'userChanges' => 'Plain\\Generated\\SubscriptionUserChangesArgs',
      'threadFieldSchemaChanges' => 'Plain\\Generated\\SubscriptionThreadFieldSchemaChangesArgs',
    ),
    'UpsertCustomerGroupOutput' => 
    array (
      'customerGroup' => 'Plain\\Generated\\UpsertCustomerGroupOutputCustomerGroupArgs',
      'result' => 'Plain\\Generated\\UpsertCustomerGroupOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertCustomerGroupOutputErrorArgs',
    ),
    'CreateCustomerGroupOutput' => 
    array (
      'customerGroup' => 'Plain\\Generated\\CreateCustomerGroupOutputCustomerGroupArgs',
      'error' => 'Plain\\Generated\\CreateCustomerGroupOutputErrorArgs',
    ),
    'UpdateCustomerGroupOutput' => 
    array (
      'customerGroup' => 'Plain\\Generated\\UpdateCustomerGroupOutputCustomerGroupArgs',
      'error' => 'Plain\\Generated\\UpdateCustomerGroupOutputErrorArgs',
    ),
    'DeleteCustomerGroupOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteCustomerGroupOutputErrorArgs',
    ),
    'AddCustomerToCustomerGroupsOutput' => 
    array (
      'customerGroupMemberships' => 'Plain\\Generated\\AddCustomerToCustomerGroupsOutputCustomerGroupMembershipsArgs',
      'error' => 'Plain\\Generated\\AddCustomerToCustomerGroupsOutputErrorArgs',
    ),
    'RemoveCustomerFromCustomerGroupsOutput' => 
    array (
      'error' => 'Plain\\Generated\\RemoveCustomerFromCustomerGroupsOutputErrorArgs',
    ),
    'CompanySearchResult' => 
    array (
      'company' => 'Plain\\Generated\\CompanySearchResultCompanyArgs',
    ),
    'CompanySearchResultEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CompanySearchResultEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CompanySearchResultEdgeNodeArgs',
    ),
    'CompanySearchResultConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CompanySearchResultConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CompanySearchResultConnectionPageInfoArgs',
    ),
    'TenantSearchResult' => 
    array (
      'tenant' => 'Plain\\Generated\\TenantSearchResultTenantArgs',
    ),
    'TenantSearchResultEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\TenantSearchResultEdgeCursorArgs',
      'node' => 'Plain\\Generated\\TenantSearchResultEdgeNodeArgs',
    ),
    'TenantSearchResultConnection' => 
    array (
      'edges' => 'Plain\\Generated\\TenantSearchResultConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\TenantSearchResultConnectionPageInfoArgs',
    ),
    'ServiceAuthorizationConnectionDetails' => 
    array (
      'serviceIntegrationKey' => 'Plain\\Generated\\ServiceAuthorizationConnectionDetailsServiceIntegrationKeyArgs',
      'serviceAuthorizationId' => 'Plain\\Generated\\ServiceAuthorizationConnectionDetailsServiceAuthorizationIdArgs',
      'hmacDigest' => 'Plain\\Generated\\ServiceAuthorizationConnectionDetailsHmacDigestArgs',
    ),
    'StartServiceAuthorizationOutput' => 
    array (
      'connectionDetails' => 'Plain\\Generated\\StartServiceAuthorizationOutputConnectionDetailsArgs',
      'error' => 'Plain\\Generated\\StartServiceAuthorizationOutputErrorArgs',
    ),
    'CompleteServiceAuthorizationOutput' => 
    array (
      'serviceAuthorization' => 'Plain\\Generated\\CompleteServiceAuthorizationOutputServiceAuthorizationArgs',
      'error' => 'Plain\\Generated\\CompleteServiceAuthorizationOutputErrorArgs',
    ),
    'DeleteServiceAuthorizationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteServiceAuthorizationOutputErrorArgs',
    ),
    'DeleteMyServiceAuthorizationOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteMyServiceAuthorizationOutputErrorArgs',
      'name' => 'Plain\\Generated\\DeleteMyServiceAuthorizationOutputNameArgs',
      'key' => 'Plain\\Generated\\DeleteMyServiceAuthorizationOutputKeyArgs',
    ),
    'JiraSite' => 
    array (
      'id' => 'Plain\\Generated\\JiraSiteIdArgs',
      'name' => 'Plain\\Generated\\JiraSiteNameArgs',
      'url' => 'Plain\\Generated\\JiraSiteUrlArgs',
      'avatarUrl' => 'Plain\\Generated\\JiraSiteAvatarUrlArgs',
    ),
    'JiraSiteIntegration' => 
    array (
      'name' => 'Plain\\Generated\\JiraSiteIntegrationNameArgs',
      'key' => 'Plain\\Generated\\JiraSiteIntegrationKeyArgs',
      'site' => 'Plain\\Generated\\JiraSiteIntegrationSiteArgs',
    ),
    'DefaultServiceIntegration' => 
    array (
      'name' => 'Plain\\Generated\\DefaultServiceIntegrationNameArgs',
      'key' => 'Plain\\Generated\\DefaultServiceIntegrationKeyArgs',
    ),
    'ServiceAuthorization' => 
    array (
      'id' => 'Plain\\Generated\\ServiceAuthorizationIdArgs',
      'serviceIntegration' => 'Plain\\Generated\\ServiceAuthorizationServiceIntegrationArgs',
      'status' => 'Plain\\Generated\\ServiceAuthorizationStatusArgs',
      'createdAt' => 'Plain\\Generated\\ServiceAuthorizationCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\ServiceAuthorizationCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\ServiceAuthorizationUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\ServiceAuthorizationUpdatedByArgs',
      'connectedAt' => 'Plain\\Generated\\ServiceAuthorizationConnectedAtArgs',
      'connectedBy' => 'Plain\\Generated\\ServiceAuthorizationConnectedByArgs',
    ),
    'ServiceAuthorizationEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\ServiceAuthorizationEdgeCursorArgs',
      'node' => 'Plain\\Generated\\ServiceAuthorizationEdgeNodeArgs',
    ),
    'ServiceAuthorizationConnection' => 
    array (
      'edges' => 'Plain\\Generated\\ServiceAuthorizationConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\ServiceAuthorizationConnectionPageInfoArgs',
    ),
    'UpsertBusinessHoursOutput' => 
    array (
      'businessHours' => 'Plain\\Generated\\UpsertBusinessHoursOutputBusinessHoursArgs',
      'result' => 'Plain\\Generated\\UpsertBusinessHoursOutputResultArgs',
      'error' => 'Plain\\Generated\\UpsertBusinessHoursOutputErrorArgs',
    ),
    'DeleteBusinessHoursOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteBusinessHoursOutputErrorArgs',
    ),
    'BusinessHoursWeekDays' => 
    array (
      'monday' => 'Plain\\Generated\\BusinessHoursWeekDaysMondayArgs',
      'tuesday' => 'Plain\\Generated\\BusinessHoursWeekDaysTuesdayArgs',
      'wednesday' => 'Plain\\Generated\\BusinessHoursWeekDaysWednesdayArgs',
      'thursday' => 'Plain\\Generated\\BusinessHoursWeekDaysThursdayArgs',
      'friday' => 'Plain\\Generated\\BusinessHoursWeekDaysFridayArgs',
      'saturday' => 'Plain\\Generated\\BusinessHoursWeekDaysSaturdayArgs',
      'sunday' => 'Plain\\Generated\\BusinessHoursWeekDaysSundayArgs',
    ),
    'BusinessHours' => 
    array (
      'weekDays' => 'Plain\\Generated\\BusinessHoursWeekDaysArgs',
      'createdAt' => 'Plain\\Generated\\BusinessHoursCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\BusinessHoursCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\BusinessHoursUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\BusinessHoursUpdatedByArgs',
    ),
    'BusinessHoursWeekDay' => 
    array (
      'startTime' => 'Plain\\Generated\\BusinessHoursWeekDayStartTimeArgs',
      'endTime' => 'Plain\\Generated\\BusinessHoursWeekDayEndTimeArgs',
    ),
    'Timezone' => 
    array (
      'name' => 'Plain\\Generated\\TimezoneNameArgs',
    ),
    'BusinessHoursSlot' => 
    array (
      'timezone' => 'Plain\\Generated\\BusinessHoursSlotTimezoneArgs',
      'weekday' => 'Plain\\Generated\\BusinessHoursSlotWeekdayArgs',
      'opensAt' => 'Plain\\Generated\\BusinessHoursSlotOpensAtArgs',
      'closesAt' => 'Plain\\Generated\\BusinessHoursSlotClosesAtArgs',
    ),
    'SyncBusinessHoursSlotsOutput' => 
    array (
      'slots' => 'Plain\\Generated\\SyncBusinessHoursSlotsOutputSlotsArgs',
      'error' => 'Plain\\Generated\\SyncBusinessHoursSlotsOutputErrorArgs',
    ),
    'UpdateThreadTenantOutput' => 
    array (
      'thread' => 'Plain\\Generated\\UpdateThreadTenantOutputThreadArgs',
      'error' => 'Plain\\Generated\\UpdateThreadTenantOutputErrorArgs',
    ),
    'UpdateThreadTierOutput' => 
    array (
      'thread' => 'Plain\\Generated\\UpdateThreadTierOutputThreadArgs',
      'error' => 'Plain\\Generated\\UpdateThreadTierOutputErrorArgs',
    ),
    'UpdateThreadEscalationPathOutput' => 
    array (
      'thread' => 'Plain\\Generated\\UpdateThreadEscalationPathOutputThreadArgs',
      'error' => 'Plain\\Generated\\UpdateThreadEscalationPathOutputErrorArgs',
    ),
    'AddCustomerToTenantsOutput' => 
    array (
      'customer' => 'Plain\\Generated\\AddCustomerToTenantsOutputCustomerArgs',
      'error' => 'Plain\\Generated\\AddCustomerToTenantsOutputErrorArgs',
    ),
    'RemoveCustomerFromTenantsOutput' => 
    array (
      'customer' => 'Plain\\Generated\\RemoveCustomerFromTenantsOutputCustomerArgs',
      'error' => 'Plain\\Generated\\RemoveCustomerFromTenantsOutputErrorArgs',
    ),
    'SetCustomerTenantsOutput' => 
    array (
      'customer' => 'Plain\\Generated\\SetCustomerTenantsOutputCustomerArgs',
      'error' => 'Plain\\Generated\\SetCustomerTenantsOutputErrorArgs',
    ),
    'CreateCheckoutSessionOutput' => 
    array (
      'sessionClientSecret' => 'Plain\\Generated\\CreateCheckoutSessionOutputSessionClientSecretArgs',
      'error' => 'Plain\\Generated\\CreateCheckoutSessionOutputErrorArgs',
    ),
    'Price' => 
    array (
      'amount' => 'Plain\\Generated\\PriceAmountArgs',
      'currency' => 'Plain\\Generated\\PriceCurrencyArgs',
    ),
    'PriceTier' => 
    array (
      'maxSeats' => 'Plain\\Generated\\PriceTierMaxSeatsArgs',
      'perSeatAmount' => 'Plain\\Generated\\PriceTierPerSeatAmountArgs',
      'flatAmount' => 'Plain\\Generated\\PriceTierFlatAmountArgs',
      'billingIntervalUnit' => 'Plain\\Generated\\PriceTierBillingIntervalUnitArgs',
      'billingIntervalCount' => 'Plain\\Generated\\PriceTierBillingIntervalCountArgs',
      'currency' => 'Plain\\Generated\\PriceTierCurrencyArgs',
    ),
    'PerSeatRecurringPrice' => 
    array (
      'billingIntervalUnit' => 'Plain\\Generated\\PerSeatRecurringPriceBillingIntervalUnitArgs',
      'billingIntervalCount' => 'Plain\\Generated\\PerSeatRecurringPriceBillingIntervalCountArgs',
      'currency' => 'Plain\\Generated\\PerSeatRecurringPriceCurrencyArgs',
      'perSeatAmount' => 'Plain\\Generated\\PerSeatRecurringPricePerSeatAmountArgs',
    ),
    'TieredRecurringPrice' => 
    array (
      'billingIntervalUnit' => 'Plain\\Generated\\TieredRecurringPriceBillingIntervalUnitArgs',
      'billingIntervalCount' => 'Plain\\Generated\\TieredRecurringPriceBillingIntervalCountArgs',
      'currency' => 'Plain\\Generated\\TieredRecurringPriceCurrencyArgs',
      'tiers' => 'Plain\\Generated\\TieredRecurringPriceTiersArgs',
    ),
    'BillingPlan' => 
    array (
      'key' => 'Plain\\Generated\\BillingPlanKeyArgs',
      'name' => 'Plain\\Generated\\BillingPlanNameArgs',
      'description' => 'Plain\\Generated\\BillingPlanDescriptionArgs',
      'features' => 'Plain\\Generated\\BillingPlanFeaturesArgs',
      'highlightedLabel' => 'Plain\\Generated\\BillingPlanHighlightedLabelArgs',
      'isSelfCheckoutEligible' => 'Plain\\Generated\\BillingPlanIsSelfCheckoutEligibleArgs',
      'monthlyPrice' => 'Plain\\Generated\\BillingPlanMonthlyPriceArgs',
      'yearlyPrice' => 'Plain\\Generated\\BillingPlanYearlyPriceArgs',
      'prices' => 'Plain\\Generated\\BillingPlanPricesArgs',
    ),
    'BillingPlanConnection' => 
    array (
      'edges' => 'Plain\\Generated\\BillingPlanConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\BillingPlanConnectionPageInfoArgs',
    ),
    'BillingPlanEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\BillingPlanEdgeCursorArgs',
      'node' => 'Plain\\Generated\\BillingPlanEdgeNodeArgs',
    ),
    'CreateBillingPortalSessionOutput' => 
    array (
      'billingPortalSessionUrl' => 'Plain\\Generated\\CreateBillingPortalSessionOutputBillingPortalSessionUrlArgs',
      'error' => 'Plain\\Generated\\CreateBillingPortalSessionOutputErrorArgs',
      'feature' => 'Plain\\Generated\\CreateBillingPortalSessionOutputFeatureArgs',
      'isEntitled' => 'Plain\\Generated\\CreateBillingPortalSessionOutputIsEntitledArgs',
    ),
    'ToggleFeatureEntitlement' => 
    array (
      'feature' => 'Plain\\Generated\\ToggleFeatureEntitlementFeatureArgs',
      'isEntitled' => 'Plain\\Generated\\ToggleFeatureEntitlementIsEntitledArgs',
    ),
    'MeteredFeatureEntitlement' => 
    array (
      'feature' => 'Plain\\Generated\\MeteredFeatureEntitlementFeatureArgs',
      'isEntitled' => 'Plain\\Generated\\MeteredFeatureEntitlementIsEntitledArgs',
      'current' => 'Plain\\Generated\\MeteredFeatureEntitlementCurrentArgs',
      'limit' => 'Plain\\Generated\\MeteredFeatureEntitlementLimitArgs',
    ),
    'BillingSubscription' => 
    array (
      'status' => 'Plain\\Generated\\BillingSubscriptionStatusArgs',
      'planKey' => 'Plain\\Generated\\BillingSubscriptionPlanKeyArgs',
      'planName' => 'Plain\\Generated\\BillingSubscriptionPlanNameArgs',
      'interval' => 'Plain\\Generated\\BillingSubscriptionIntervalArgs',
      'cancelsAt' => 'Plain\\Generated\\BillingSubscriptionCancelsAtArgs',
      'trialEndsAt' => 'Plain\\Generated\\BillingSubscriptionTrialEndsAtArgs',
      'entitlements' => 'Plain\\Generated\\BillingSubscriptionEntitlementsArgs',
      'endedAt' => 'Plain\\Generated\\BillingSubscriptionEndedAtArgs',
    ),
    'RoleChangeCost' => 
    array (
      'totalPrice' => 'Plain\\Generated\\RoleChangeCostTotalPriceArgs',
      'fullPrice' => 'Plain\\Generated\\RoleChangeCostFullPriceArgs',
      'adjustedPrice' => 'Plain\\Generated\\RoleChangeCostAdjustedPriceArgs',
      'dueNowPrice' => 'Plain\\Generated\\RoleChangeCostDueNowPriceArgs',
      'quantity' => 'Plain\\Generated\\RoleChangeCostQuantityArgs',
      'intervalUnit' => 'Plain\\Generated\\RoleChangeCostIntervalUnitArgs',
      'intervalCount' => 'Plain\\Generated\\RoleChangeCostIntervalCountArgs',
      'addingSeatType' => 'Plain\\Generated\\RoleChangeCostAddingSeatTypeArgs',
      'removingSeatType' => 'Plain\\Generated\\RoleChangeCostRemovingSeatTypeArgs',
    ),
    'CalculateRoleChangeCostOutput' => 
    array (
      'roleChangeCost' => 'Plain\\Generated\\CalculateRoleChangeCostOutputRoleChangeCostArgs',
      'error' => 'Plain\\Generated\\CalculateRoleChangeCostOutputErrorArgs',
    ),
    'AddUserToActiveBillingRotaOutput' => 
    array (
      'billingRota' => 'Plain\\Generated\\AddUserToActiveBillingRotaOutputBillingRotaArgs',
      'error' => 'Plain\\Generated\\AddUserToActiveBillingRotaOutputErrorArgs',
    ),
    'RemoveUserFromActiveBillingRotaOutput' => 
    array (
      'billingRota' => 'Plain\\Generated\\RemoveUserFromActiveBillingRotaOutputBillingRotaArgs',
      'error' => 'Plain\\Generated\\RemoveUserFromActiveBillingRotaOutputErrorArgs',
    ),
    'BillingRota' => 
    array (
      'onRotaUserIds' => 'Plain\\Generated\\BillingRotaOnRotaUserIdsArgs',
      'offRotaUserIds' => 'Plain\\Generated\\BillingRotaOffRotaUserIdsArgs',
    ),
    'UpdateActiveBillingRotaOutput' => 
    array (
      'billingRota' => 'Plain\\Generated\\UpdateActiveBillingRotaOutputBillingRotaArgs',
      'error' => 'Plain\\Generated\\UpdateActiveBillingRotaOutputErrorArgs',
    ),
    'ChangeBillingPlanOutput' => 
    array (
      'error' => 'Plain\\Generated\\ChangeBillingPlanOutputErrorArgs',
    ),
    'PreviewBillingPlanChangeOutput' => 
    array (
      'preview' => 'Plain\\Generated\\PreviewBillingPlanChangeOutputPreviewArgs',
      'error' => 'Plain\\Generated\\PreviewBillingPlanChangeOutputErrorArgs',
    ),
    'BillingPlanChangePreview' => 
    array (
      'immediateCost' => 'Plain\\Generated\\BillingPlanChangePreviewImmediateCostArgs',
      'earliestEffectiveAt' => 'Plain\\Generated\\BillingPlanChangePreviewEarliestEffectiveAtArgs',
    ),
    'PaymentMethod' => 
    array (
      'isAvailable' => 'Plain\\Generated\\PaymentMethodIsAvailableArgs',
    ),
    'WorkspaceHmac' => 
    array (
      'hmacSecret' => 'Plain\\Generated\\WorkspaceHmacHmacSecretArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceHmacCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceHmacCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceHmacUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceHmacUpdatedByArgs',
    ),
    'RegenerateWorkspaceHmacOutput' => 
    array (
      'workspaceHmac' => 'Plain\\Generated\\RegenerateWorkspaceHmacOutputWorkspaceHmacArgs',
      'error' => 'Plain\\Generated\\RegenerateWorkspaceHmacOutputErrorArgs',
    ),
    'WorkspaceFileDownloadUrl' => 
    array (
      'downloadUrl' => 'Plain\\Generated\\WorkspaceFileDownloadUrlDownloadUrlArgs',
      'expiresAt' => 'Plain\\Generated\\WorkspaceFileDownloadUrlExpiresAtArgs',
    ),
    'WorkspaceFile' => 
    array (
      'id' => 'Plain\\Generated\\WorkspaceFileIdArgs',
      'fileName' => 'Plain\\Generated\\WorkspaceFileFileNameArgs',
      'fileSize' => 'Plain\\Generated\\WorkspaceFileFileSizeArgs',
      'fileExtension' => 'Plain\\Generated\\WorkspaceFileFileExtensionArgs',
      'fileMimeType' => 'Plain\\Generated\\WorkspaceFileFileMimeTypeArgs',
      'visibility' => 'Plain\\Generated\\WorkspaceFileVisibilityArgs',
      'downloadUrl' => 'Plain\\Generated\\WorkspaceFileDownloadUrlArgs',
      'createdAt' => 'Plain\\Generated\\WorkspaceFileCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\WorkspaceFileCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\WorkspaceFileUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\WorkspaceFileUpdatedByArgs',
    ),
    'WorkspaceFileUploadUrl' => 
    array (
      'workspaceFile' => 'Plain\\Generated\\WorkspaceFileUploadUrlWorkspaceFileArgs',
      'uploadFormUrl' => 'Plain\\Generated\\WorkspaceFileUploadUrlUploadFormUrlArgs',
      'uploadFormData' => 'Plain\\Generated\\WorkspaceFileUploadUrlUploadFormDataArgs',
      'expiresAt' => 'Plain\\Generated\\WorkspaceFileUploadUrlExpiresAtArgs',
    ),
    'CreateWorkspaceFileUploadUrlOutput' => 
    array (
      'workspaceFileUploadUrl' => 'Plain\\Generated\\CreateWorkspaceFileUploadUrlOutputWorkspaceFileUploadUrlArgs',
      'error' => 'Plain\\Generated\\CreateWorkspaceFileUploadUrlOutputErrorArgs',
    ),
    'DeleteWorkspaceFileOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteWorkspaceFileOutputErrorArgs',
    ),
    'ResolveCustomerForSlackChannelOutput' => 
    array (
      'error' => 'Plain\\Generated\\ResolveCustomerForSlackChannelOutputErrorArgs',
      'customer' => 'Plain\\Generated\\ResolveCustomerForSlackChannelOutputCustomerArgs',
    ),
    'ResolveCustomerForMSTeamsChannelOutput' => 
    array (
      'error' => 'Plain\\Generated\\ResolveCustomerForMSTeamsChannelOutputErrorArgs',
      'customer' => 'Plain\\Generated\\ResolveCustomerForMSTeamsChannelOutputCustomerArgs',
    ),
    'HelpCenterConnection' => 
    array (
      'edges' => 'Plain\\Generated\\HelpCenterConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\HelpCenterConnectionPageInfoArgs',
    ),
    'HelpCenterEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\HelpCenterEdgeCursorArgs',
      'node' => 'Plain\\Generated\\HelpCenterEdgeNodeArgs',
    ),
    'HelpCenterArticleGroupConnection' => 
    array (
      'edges' => 'Plain\\Generated\\HelpCenterArticleGroupConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\HelpCenterArticleGroupConnectionPageInfoArgs',
    ),
    'HelpCenterArticleGroupEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\HelpCenterArticleGroupEdgeCursorArgs',
      'node' => 'Plain\\Generated\\HelpCenterArticleGroupEdgeNodeArgs',
    ),
    'HelpCenterDomainNameVerificationTxtRecord' => 
    array (
      'name' => 'Plain\\Generated\\HelpCenterDomainNameVerificationTxtRecordNameArgs',
      'value' => 'Plain\\Generated\\HelpCenterDomainNameVerificationTxtRecordValueArgs',
    ),
    'HelpCenterDomainSettings' => 
    array (
      'domainName' => 'Plain\\Generated\\HelpCenterDomainSettingsDomainNameArgs',
      'customDomainName' => 'Plain\\Generated\\HelpCenterDomainSettingsCustomDomainNameArgs',
      'customDomainNameVerificationTxtRecord' => 'Plain\\Generated\\HelpCenterDomainSettingsCustomDomainNameVerificationTxtRecordArgs',
      'customDomainNameVerifiedAt' => 'Plain\\Generated\\HelpCenterDomainSettingsCustomDomainNameVerifiedAtArgs',
    ),
    'HelpCenterAccessSettings' => 
    array (
      'tierIds' => 'Plain\\Generated\\HelpCenterAccessSettingsTierIdsArgs',
      'tenantIds' => 'Plain\\Generated\\HelpCenterAccessSettingsTenantIdsArgs',
      'companyIds' => 'Plain\\Generated\\HelpCenterAccessSettingsCompanyIdsArgs',
      'customerIds' => 'Plain\\Generated\\HelpCenterAccessSettingsCustomerIdsArgs',
    ),
    'HelpCenterAuthMechanismWorkosAuthkit' => 
    array (
      'type' => 'Plain\\Generated\\HelpCenterAuthMechanismWorkosAuthkitTypeArgs',
    ),
    'HelpCenterAuthMechanismWorkosConnect' => 
    array (
      'type' => 'Plain\\Generated\\HelpCenterAuthMechanismWorkosConnectTypeArgs',
      'appClientId' => 'Plain\\Generated\\HelpCenterAuthMechanismWorkosConnectAppClientIdArgs',
      'appSecretMasked' => 'Plain\\Generated\\HelpCenterAuthMechanismWorkosConnectAppSecretMaskedArgs',
      'apiHost' => 'Plain\\Generated\\HelpCenterAuthMechanismWorkosConnectApiHostArgs',
    ),
    'HelpCenter' => 
    array (
      'id' => 'Plain\\Generated\\HelpCenterIdArgs',
      'type' => 'Plain\\Generated\\HelpCenterTypeArgs',
      'publicName' => 'Plain\\Generated\\HelpCenterPublicNameArgs',
      'internalName' => 'Plain\\Generated\\HelpCenterInternalNameArgs',
      'description' => 'Plain\\Generated\\HelpCenterDescriptionArgs',
      'domainSettings' => 'Plain\\Generated\\HelpCenterDomainSettingsArgs',
      'portalSettings' => 'Plain\\Generated\\HelpCenterPortalSettingsArgs',
      'headCustomJs' => 'Plain\\Generated\\HelpCenterHeadCustomJsArgs',
      'bodyCustomJs' => 'Plain\\Generated\\HelpCenterBodyCustomJsArgs',
      'isChatEnabled' => 'Plain\\Generated\\HelpCenterIsChatEnabledArgs',
      'favicon' => 'Plain\\Generated\\HelpCenterFaviconArgs',
      'agentAvatarImage' => 'Plain\\Generated\\HelpCenterAgentAvatarImageArgs',
      'logo' => 'Plain\\Generated\\HelpCenterLogoArgs',
      'color' => 'Plain\\Generated\\HelpCenterColorArgs',
      'socialPreviewImage' => 'Plain\\Generated\\HelpCenterSocialPreviewImageArgs',
      'access' => 'Plain\\Generated\\HelpCenterAccessArgs',
      'authMechanism' => 'Plain\\Generated\\HelpCenterAuthMechanismArgs',
      'publishedAt' => 'Plain\\Generated\\HelpCenterPublishedAtArgs',
      'publishedBy' => 'Plain\\Generated\\HelpCenterPublishedByArgs',
      'isDeleted' => 'Plain\\Generated\\HelpCenterIsDeletedArgs',
      'deletedAt' => 'Plain\\Generated\\HelpCenterDeletedAtArgs',
      'deletedBy' => 'Plain\\Generated\\HelpCenterDeletedByArgs',
      'createdAt' => 'Plain\\Generated\\HelpCenterCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\HelpCenterCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\HelpCenterUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\HelpCenterUpdatedByArgs',
      'articleGroups' => 'Plain\\Generated\\HelpCenterArticleGroupsArgs',
      'articles' => 'Plain\\Generated\\HelpCenterArticlesArgs',
    ),
    'HelpCenterIndex' => 
    array (
      'helpCenterId' => 'Plain\\Generated\\HelpCenterIndexHelpCenterIdArgs',
      'hash' => 'Plain\\Generated\\HelpCenterIndexHashArgs',
      'navIndex' => 'Plain\\Generated\\HelpCenterIndexNavIndexArgs',
      'createdAt' => 'Plain\\Generated\\HelpCenterIndexCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\HelpCenterIndexCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\HelpCenterIndexUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\HelpCenterIndexUpdatedByArgs',
    ),
    'HelpCenterIndexItem' => 
    array (
      'type' => 'Plain\\Generated\\HelpCenterIndexItemTypeArgs',
      'id' => 'Plain\\Generated\\HelpCenterIndexItemIdArgs',
      'title' => 'Plain\\Generated\\HelpCenterIndexItemTitleArgs',
      'slug' => 'Plain\\Generated\\HelpCenterIndexItemSlugArgs',
      'parentId' => 'Plain\\Generated\\HelpCenterIndexItemParentIdArgs',
    ),
    'HelpCenterArticleGroup' => 
    array (
      'id' => 'Plain\\Generated\\HelpCenterArticleGroupIdArgs',
      'name' => 'Plain\\Generated\\HelpCenterArticleGroupNameArgs',
      'createdAt' => 'Plain\\Generated\\HelpCenterArticleGroupCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\HelpCenterArticleGroupCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\HelpCenterArticleGroupUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\HelpCenterArticleGroupUpdatedByArgs',
      'parentArticleGroup' => 'Plain\\Generated\\HelpCenterArticleGroupParentArticleGroupArgs',
      'childArticleGroups' => 'Plain\\Generated\\HelpCenterArticleGroupChildArticleGroupsArgs',
      'articles' => 'Plain\\Generated\\HelpCenterArticleGroupArticlesArgs',
      'slug' => 'Plain\\Generated\\HelpCenterArticleGroupSlugArgs',
    ),
    'HelpCenterArticle' => 
    array (
      'id' => 'Plain\\Generated\\HelpCenterArticleIdArgs',
      'title' => 'Plain\\Generated\\HelpCenterArticleTitleArgs',
      'description' => 'Plain\\Generated\\HelpCenterArticleDescriptionArgs',
      'contentHtml' => 'Plain\\Generated\\HelpCenterArticleContentHtmlArgs',
      'slug' => 'Plain\\Generated\\HelpCenterArticleSlugArgs',
      'status' => 'Plain\\Generated\\HelpCenterArticleStatusArgs',
      'statusChangedAt' => 'Plain\\Generated\\HelpCenterArticleStatusChangedAtArgs',
      'statusChangedBy' => 'Plain\\Generated\\HelpCenterArticleStatusChangedByArgs',
      'createdAt' => 'Plain\\Generated\\HelpCenterArticleCreatedAtArgs',
      'createdBy' => 'Plain\\Generated\\HelpCenterArticleCreatedByArgs',
      'updatedAt' => 'Plain\\Generated\\HelpCenterArticleUpdatedAtArgs',
      'updatedBy' => 'Plain\\Generated\\HelpCenterArticleUpdatedByArgs',
      'articleGroup' => 'Plain\\Generated\\HelpCenterArticleArticleGroupArgs',
    ),
    'HelpCenterArticleConnection' => 
    array (
      'edges' => 'Plain\\Generated\\HelpCenterArticleConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\HelpCenterArticleConnectionPageInfoArgs',
    ),
    'HelpCenterArticleEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\HelpCenterArticleEdgeCursorArgs',
      'node' => 'Plain\\Generated\\HelpCenterArticleEdgeNodeArgs',
    ),
    'HelpCenterThemedImage' => 
    array (
      'light' => 'Plain\\Generated\\HelpCenterThemedImageLightArgs',
      'dark' => 'Plain\\Generated\\HelpCenterThemedImageDarkArgs',
    ),
    'HelpCenterPortalSettingsThreadVisibility' => 
    array (
      'customerCompany' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadVisibilityCustomerCompanyArgs',
      'customerTenants' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadVisibilityCustomerTenantsArgs',
    ),
    'HelpCenterPortalSettingsThreadFields' => 
    array (
      'threadFieldSchema' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadFieldsThreadFieldSchemaArgs',
      'selectedStringValue' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadFieldsSelectedStringValueArgs',
      'selectedBooleanValue' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadFieldsSelectedBooleanValueArgs',
    ),
    'HelpCenterPortalSettingsThreadDetails' => 
    array (
      'labelTypes' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadDetailsLabelTypesArgs',
      'priority' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadDetailsPriorityArgs',
      'assignees' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadDetailsAssigneesArgs',
      'threadFields' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadDetailsThreadFieldsArgs',
    ),
    'HelpCenterPortalSettingsTextFormField' => 
    array (
      'id' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldIdArgs',
      'type' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldTypeArgs',
      'label' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldLabelArgs',
      'placeholder' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldPlaceholderArgs',
      'isRequired' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldIsRequiredArgs',
      'threadDetails' => 'Plain\\Generated\\HelpCenterPortalSettingsTextFormFieldThreadDetailsArgs',
    ),
    'HelpCenterPortalSettingsDropdownOption' => 
    array (
      'dropdownOptionId' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownOptionDropdownOptionIdArgs',
      'label' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownOptionLabelArgs',
      'threadDetails' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownOptionThreadDetailsArgs',
    ),
    'HelpCenterPortalSettingsDropdownFormField' => 
    array (
      'id' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldIdArgs',
      'type' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldTypeArgs',
      'label' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldLabelArgs',
      'placeholder' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldPlaceholderArgs',
      'isRequired' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldIsRequiredArgs',
      'dropdownOptions' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownFormFieldDropdownOptionsArgs',
    ),
    'HelpCenterPortalSettings' => 
    array (
      'isEnabled' => 'Plain\\Generated\\HelpCenterPortalSettingsIsEnabledArgs',
      'threadVisibility' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadVisibilityArgs',
      'formFields' => 'Plain\\Generated\\HelpCenterPortalSettingsFormFieldsArgs',
      'isAdditionalRecipientsEnabled' => 'Plain\\Generated\\HelpCenterPortalSettingsIsAdditionalRecipientsEnabledArgs',
    ),
    'CreateHelpCenterOutput' => 
    array (
      'helpCenter' => 'Plain\\Generated\\CreateHelpCenterOutputHelpCenterArgs',
      'error' => 'Plain\\Generated\\CreateHelpCenterOutputErrorArgs',
    ),
    'UpdateHelpCenterOutput' => 
    array (
      'helpCenter' => 'Plain\\Generated\\UpdateHelpCenterOutputHelpCenterArgs',
      'error' => 'Plain\\Generated\\UpdateHelpCenterOutputErrorArgs',
    ),
    'DeleteHelpCenterOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteHelpCenterOutputErrorArgs',
    ),
    'UpsertHelpCenterArticleOutput' => 
    array (
      'helpCenterArticle' => 'Plain\\Generated\\UpsertHelpCenterArticleOutputHelpCenterArticleArgs',
      'error' => 'Plain\\Generated\\UpsertHelpCenterArticleOutputErrorArgs',
    ),
    'DeleteHelpCenterArticleOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteHelpCenterArticleOutputErrorArgs',
    ),
    'CreateHelpCenterArticleGroupOutput' => 
    array (
      'helpCenterArticleGroup' => 'Plain\\Generated\\CreateHelpCenterArticleGroupOutputHelpCenterArticleGroupArgs',
      'error' => 'Plain\\Generated\\CreateHelpCenterArticleGroupOutputErrorArgs',
    ),
    'UpdateHelpCenterArticleGroupOutput' => 
    array (
      'helpCenterArticleGroup' => 'Plain\\Generated\\UpdateHelpCenterArticleGroupOutputHelpCenterArticleGroupArgs',
      'error' => 'Plain\\Generated\\UpdateHelpCenterArticleGroupOutputErrorArgs',
    ),
    'DeleteHelpCenterArticleGroupOutput' => 
    array (
      'error' => 'Plain\\Generated\\DeleteHelpCenterArticleGroupOutputErrorArgs',
    ),
    'CreateIssueTrackerIssueOutput' => 
    array (
      'error' => 'Plain\\Generated\\CreateIssueTrackerIssueOutputErrorArgs',
      'threadLinkCandidate' => 'Plain\\Generated\\CreateIssueTrackerIssueOutputThreadLinkCandidateArgs',
    ),
    'CustomerSurveyEdge' => 
    array (
      'cursor' => 'Plain\\Generated\\CustomerSurveyEdgeCursorArgs',
      'node' => 'Plain\\Generated\\CustomerSurveyEdgeNodeArgs',
    ),
    'CustomerSurveyConnection' => 
    array (
      'edges' => 'Plain\\Generated\\CustomerSurveyConnectionEdgesArgs',
      'pageInfo' => 'Plain\\Generated\\CustomerSurveyConnectionPageInfoArgs',
    ),
  ),
  'inputObjectsMapping' => 
  array (
    'UsersFilter' => 'Plain\\Generated\\UsersFilter',
    'RoleFilter' => 'Plain\\Generated\\RoleFilter',
    'LabelTypeFilter' => 'Plain\\Generated\\LabelTypeFilter',
    'CustomersFilter' => 'Plain\\Generated\\CustomersFilter',
    'CustomersSort' => 'Plain\\Generated\\CustomersSort',
    'StringSearchExpression' => 'Plain\\Generated\\StringSearchExpression',
    'CustomerSearchCondition' => 'Plain\\Generated\\CustomerSearchCondition',
    'CustomersSearchQuery' => 'Plain\\Generated\\CustomersSearchQuery',
    'SelectedIssueTrackerField' => 'Plain\\Generated\\SelectedIssueTrackerField',
    'ThreadLinkCandidateFilter' => 'Plain\\Generated\\ThreadLinkCandidateFilter',
    'GenerateReplyOption' => 'Plain\\Generated\\GenerateReplyOption',
    'ThreadClustersFilter' => 'Plain\\Generated\\ThreadClustersFilter',
    'CustomerGroupsFilter' => 'Plain\\Generated\\CustomerGroupsFilter',
    'CustomerGroupMembershipsFilter' => 'Plain\\Generated\\CustomerGroupMembershipsFilter',
    'SingleValueMetricFilters' => 'Plain\\Generated\\SingleValueMetricFilters',
    'SingleValueMetricOptions' => 'Plain\\Generated\\SingleValueMetricOptions',
    'HeatmapMetricFilters' => 'Plain\\Generated\\HeatmapMetricFilters',
    'HeatmapMetricOptionsInput' => 'Plain\\Generated\\HeatmapMetricOptionsInput',
    'TimeSeriesMetricInterval' => 'Plain\\Generated\\TimeSeriesMetricInterval',
    'TimeSeriesMetricFilters' => 'Plain\\Generated\\TimeSeriesMetricFilters',
    'TimeSeriesMetricOptions' => 'Plain\\Generated\\TimeSeriesMetricOptions',
    'TierIdentifierInput' => 'Plain\\Generated\\TierIdentifierInput',
    'ThreadFieldFilter' => 'Plain\\Generated\\ThreadFieldFilter',
    'DatetimeFilter' => 'Plain\\Generated\\DatetimeFilter',
    'SurveyResponseFilter' => 'Plain\\Generated\\SurveyResponseFilter',
    'ThreadsFilter' => 'Plain\\Generated\\ThreadsFilter',
    'TenantFieldFilter' => 'Plain\\Generated\\TenantFieldFilter',
    'ServiceLevelAgreementFilter' => 'Plain\\Generated\\ServiceLevelAgreementFilter',
    'AgentStatusFilter' => 'Plain\\Generated\\AgentStatusFilter',
    'ThreadsSort' => 'Plain\\Generated\\ThreadsSort',
    'StringInput' => 'Plain\\Generated\\StringInput',
    'IntInput' => 'Plain\\Generated\\IntInput',
    'BooleanInput' => 'Plain\\Generated\\BooleanInput',
    'OptionalStringInput' => 'Plain\\Generated\\OptionalStringInput',
    'OptionalBooleanInput' => 'Plain\\Generated\\OptionalBooleanInput',
    'CreateUserAccountInput' => 'Plain\\Generated\\CreateUserAccountInput',
    'CreateWorkspaceInput' => 'Plain\\Generated\\CreateWorkspaceInput',
    'InviteUserToWorkspaceInput' => 'Plain\\Generated\\InviteUserToWorkspaceInput',
    'AcceptWorkspaceInviteInput' => 'Plain\\Generated\\AcceptWorkspaceInviteInput',
    'DeleteWorkspaceInviteInput' => 'Plain\\Generated\\DeleteWorkspaceInviteInput',
    'AssignRolesToUserInput' => 'Plain\\Generated\\AssignRolesToUserInput',
    'CreateCustomRoleInput' => 'Plain\\Generated\\CreateCustomRoleInput',
    'UpdateCustomRoleInput' => 'Plain\\Generated\\UpdateCustomRoleInput',
    'DeleteCustomRoleInput' => 'Plain\\Generated\\DeleteCustomRoleInput',
    'ScopeConditionInput' => 'Plain\\Generated\\ScopeConditionInput',
    'UpsertRoleScopesInput' => 'Plain\\Generated\\UpsertRoleScopesInput',
    'CreateLabelTypeInput' => 'Plain\\Generated\\CreateLabelTypeInput',
    'ArchiveLabelTypeInput' => 'Plain\\Generated\\ArchiveLabelTypeInput',
    'UnarchiveLabelTypeInput' => 'Plain\\Generated\\UnarchiveLabelTypeInput',
    'UpdateLabelTypeInput' => 'Plain\\Generated\\UpdateLabelTypeInput',
    'AddLabelsInput' => 'Plain\\Generated\\AddLabelsInput',
    'AddLabelsToUserInput' => 'Plain\\Generated\\AddLabelsToUserInput',
    'RemoveLabelsInput' => 'Plain\\Generated\\RemoveLabelsInput',
    'RemoveLabelsFromUserInput' => 'Plain\\Generated\\RemoveLabelsFromUserInput',
    'DependsOnThreadFieldInput' => 'Plain\\Generated\\DependsOnThreadFieldInput',
    'OptionalDependsOnThreadFieldInput' => 'Plain\\Generated\\OptionalDependsOnThreadFieldInput',
    'CreateThreadFieldSchemaInput' => 'Plain\\Generated\\CreateThreadFieldSchemaInput',
    'UpdateThreadFieldSchemaInput' => 'Plain\\Generated\\UpdateThreadFieldSchemaInput',
    'DeleteThreadFieldSchemaInput' => 'Plain\\Generated\\DeleteThreadFieldSchemaInput',
    'DeleteEscalationPathInput' => 'Plain\\Generated\\DeleteEscalationPathInput',
    'CreateEscalationPathInput' => 'Plain\\Generated\\CreateEscalationPathInput',
    'UpdateEscalationPathInput' => 'Plain\\Generated\\UpdateEscalationPathInput',
    'EscalationPathStepInput' => 'Plain\\Generated\\EscalationPathStepInput',
    'ThreadFieldSchemaOrderInput' => 'Plain\\Generated\\ThreadFieldSchemaOrderInput',
    'ReorderThreadFieldSchemasInput' => 'Plain\\Generated\\ReorderThreadFieldSchemasInput',
    'UpsertThreadFieldIdentifier' => 'Plain\\Generated\\UpsertThreadFieldIdentifier',
    'UpsertThreadFieldInput' => 'Plain\\Generated\\UpsertThreadFieldInput',
    'CreateThreadFieldOnThreadInput' => 'Plain\\Generated\\CreateThreadFieldOnThreadInput',
    'BulkUpsertThreadFieldsInput' => 'Plain\\Generated\\BulkUpsertThreadFieldsInput',
    'DeleteThreadFieldIdentifier' => 'Plain\\Generated\\DeleteThreadFieldIdentifier',
    'DeleteThreadFieldInput' => 'Plain\\Generated\\DeleteThreadFieldInput',
    'CreateWorkflowRuleInput' => 'Plain\\Generated\\CreateWorkflowRuleInput',
    'UpdateWorkflowRuleInput' => 'Plain\\Generated\\UpdateWorkflowRuleInput',
    'ToggleWorkflowRulePublishedInput' => 'Plain\\Generated\\ToggleWorkflowRulePublishedInput',
    'DeleteWorkflowRuleInput' => 'Plain\\Generated\\DeleteWorkflowRuleInput',
    'TriggerWorkflowRuleInput' => 'Plain\\Generated\\TriggerWorkflowRuleInput',
    'WorkspaceFileInput' => 'Plain\\Generated\\WorkspaceFileInput',
    'CreateChatAppInput' => 'Plain\\Generated\\CreateChatAppInput',
    'UpdateChatAppInput' => 'Plain\\Generated\\UpdateChatAppInput',
    'DeleteChatAppInput' => 'Plain\\Generated\\DeleteChatAppInput',
    'CreateChatAppSecretInput' => 'Plain\\Generated\\CreateChatAppSecretInput',
    'DeleteChatAppSecretInput' => 'Plain\\Generated\\DeleteChatAppSecretInput',
    'LinearIssueThreadLinkInput' => 'Plain\\Generated\\LinearIssueThreadLinkInput',
    'PlainThreadLinkInput' => 'Plain\\Generated\\PlainThreadLinkInput',
    'JiraIssueThreadLinkInput' => 'Plain\\Generated\\JiraIssueThreadLinkInput',
    'CreateThreadLinkInput' => 'Plain\\Generated\\CreateThreadLinkInput',
    'DeleteThreadLinkInput' => 'Plain\\Generated\\DeleteThreadLinkInput',
    'ThreadLinkGroupFilter' => 'Plain\\Generated\\ThreadLinkGroupFilter',
    'CreateNoteInput' => 'Plain\\Generated\\CreateNoteInput',
    'DeleteNoteInput' => 'Plain\\Generated\\DeleteNoteInput',
    'ThreadsDisplayOptionsInput' => 'Plain\\Generated\\ThreadsDisplayOptionsInput',
    'SavedThreadsViewFilterInput' => 'Plain\\Generated\\SavedThreadsViewFilterInput',
    'CreateSavedThreadsViewInput' => 'Plain\\Generated\\CreateSavedThreadsViewInput',
    'DeleteSavedThreadsViewInput' => 'Plain\\Generated\\DeleteSavedThreadsViewInput',
    'UpdateSavedThreadsViewInput' => 'Plain\\Generated\\UpdateSavedThreadsViewInput',
    'CreateMyFavoritePageInput' => 'Plain\\Generated\\CreateMyFavoritePageInput',
    'DeleteMyFavoritePageInput' => 'Plain\\Generated\\DeleteMyFavoritePageInput',
    'CreateSnippetInput' => 'Plain\\Generated\\CreateSnippetInput',
    'DeleteSnippetInput' => 'Plain\\Generated\\DeleteSnippetInput',
    'UpdateSnippetInput' => 'Plain\\Generated\\UpdateSnippetInput',
    'SendChatInput' => 'Plain\\Generated\\SendChatInput',
    'SendCustomerChatInput' => 'Plain\\Generated\\SendCustomerChatInput',
    'ChangeUserStatusInput' => 'Plain\\Generated\\ChangeUserStatusInput',
    'UpdateMyUserInput' => 'Plain\\Generated\\UpdateMyUserInput',
    'UpdateUserDefaultSavedThreadsViewInput' => 'Plain\\Generated\\UpdateUserDefaultSavedThreadsViewInput',
    'UpdateWorkspaceInput' => 'Plain\\Generated\\UpdateWorkspaceInput',
    'DeleteUserInput' => 'Plain\\Generated\\DeleteUserInput',
    'AddWorkspaceAlternateSupportEmailAddressInput' => 'Plain\\Generated\\AddWorkspaceAlternateSupportEmailAddressInput',
    'RemoveWorkspaceAlternateSupportEmailAddressInput' => 'Plain\\Generated\\RemoveWorkspaceAlternateSupportEmailAddressInput',
    'CreateWorkspaceEmailDomainSettingsInput' => 'Plain\\Generated\\CreateWorkspaceEmailDomainSettingsInput',
    'VerifyWorkspaceEmailForwardingSettingsInput' => 'Plain\\Generated\\VerifyWorkspaceEmailForwardingSettingsInput',
    'UpdateWorkspaceEmailSettingsInput' => 'Plain\\Generated\\UpdateWorkspaceEmailSettingsInput',
    'EmailParticipantInput' => 'Plain\\Generated\\EmailParticipantInput',
    'SendNewEmailInput' => 'Plain\\Generated\\SendNewEmailInput',
    'SendBulkEmailInput' => 'Plain\\Generated\\SendBulkEmailInput',
    'ReplyToEmailInput' => 'Plain\\Generated\\ReplyToEmailInput',
    'CreateEmailPreviewUrlInput' => 'Plain\\Generated\\CreateEmailPreviewUrlInput',
    'CreateAttachmentDownloadUrlInput' => 'Plain\\Generated\\CreateAttachmentDownloadUrlInput',
    'CreateAttachmentUploadUrlInput' => 'Plain\\Generated\\CreateAttachmentUploadUrlInput',
    'ComponentTextInput' => 'Plain\\Generated\\ComponentTextInput',
    'ComponentPlainTextInput' => 'Plain\\Generated\\ComponentPlainTextInput',
    'ComponentLinkButtonInput' => 'Plain\\Generated\\ComponentLinkButtonInput',
    'ComponentBadgeInput' => 'Plain\\Generated\\ComponentBadgeInput',
    'ComponentCopyButtonInput' => 'Plain\\Generated\\ComponentCopyButtonInput',
    'ComponentRowInput' => 'Plain\\Generated\\ComponentRowInput',
    'ComponentContainerInput' => 'Plain\\Generated\\ComponentContainerInput',
    'ComponentDividerInput' => 'Plain\\Generated\\ComponentDividerInput',
    'ComponentSpacerInput' => 'Plain\\Generated\\ComponentSpacerInput',
    'ComponentContainerContentInput' => 'Plain\\Generated\\ComponentContainerContentInput',
    'ComponentRowContentInput' => 'Plain\\Generated\\ComponentRowContentInput',
    'ComponentInput' => 'Plain\\Generated\\ComponentInput',
    'EventComponentInput' => 'Plain\\Generated\\EventComponentInput',
    'EmailAddressInput' => 'Plain\\Generated\\EmailAddressInput',
    'UpsertCustomerIdentifierInput' => 'Plain\\Generated\\UpsertCustomerIdentifierInput',
    'UpsertCustomerOnCreateInput' => 'Plain\\Generated\\UpsertCustomerOnCreateInput',
    'UpsertCustomerOnUpdateInput' => 'Plain\\Generated\\UpsertCustomerOnUpdateInput',
    'UpsertCustomerInput' => 'Plain\\Generated\\UpsertCustomerInput',
    'CreateMachineUserInput' => 'Plain\\Generated\\CreateMachineUserInput',
    'DeleteMachineUserInput' => 'Plain\\Generated\\DeleteMachineUserInput',
    'UpdateMachineUserInput' => 'Plain\\Generated\\UpdateMachineUserInput',
    'CreateApiKeyInput' => 'Plain\\Generated\\CreateApiKeyInput',
    'UpdateApiKeyInput' => 'Plain\\Generated\\UpdateApiKeyInput',
    'DeleteApiKeyInput' => 'Plain\\Generated\\DeleteApiKeyInput',
    'DeleteCustomerInput' => 'Plain\\Generated\\DeleteCustomerInput',
    'DeleteThreadInput' => 'Plain\\Generated\\DeleteThreadInput',
    'CreateCustomerEventInput' => 'Plain\\Generated\\CreateCustomerEventInput',
    'CreateThreadEventInput' => 'Plain\\Generated\\CreateThreadEventInput',
    'AutoresponderConditionInput' => 'Plain\\Generated\\AutoresponderConditionInput',
    'CreateAutoresponderInput' => 'Plain\\Generated\\CreateAutoresponderInput',
    'UpdateAutoresponderInput' => 'Plain\\Generated\\UpdateAutoresponderInput',
    'DeleteAutoresponderInput' => 'Plain\\Generated\\DeleteAutoresponderInput',
    'AutoresponderOrderInput' => 'Plain\\Generated\\AutoresponderOrderInput',
    'ReorderAutorespondersInput' => 'Plain\\Generated\\ReorderAutorespondersInput',
    'CustomerSurveyConditionInput' => 'Plain\\Generated\\CustomerSurveyConditionInput',
    'CsatCustomerSurveyTemplateInput' => 'Plain\\Generated\\CsatCustomerSurveyTemplateInput',
    'CustomerSurveyTemplateInput' => 'Plain\\Generated\\CustomerSurveyTemplateInput',
    'CreateCustomerSurveyInput' => 'Plain\\Generated\\CreateCustomerSurveyInput',
    'UpdateCustomerSurveyInput' => 'Plain\\Generated\\UpdateCustomerSurveyInput',
    'DeleteCustomerSurveyInput' => 'Plain\\Generated\\DeleteCustomerSurveyInput',
    'CustomerSurveyOrderInput' => 'Plain\\Generated\\CustomerSurveyOrderInput',
    'ReorderCustomerSurveysInput' => 'Plain\\Generated\\ReorderCustomerSurveysInput',
    'CreateAiFeatureFeedbackInput' => 'Plain\\Generated\\CreateAiFeatureFeedbackInput',
    'AiAgentFeedbackDetailsInput' => 'Plain\\Generated\\AiAgentFeedbackDetailsInput',
    'EscalateThreadInput' => 'Plain\\Generated\\EscalateThreadInput',
    'MoveLabelTypeInput' => 'Plain\\Generated\\MoveLabelTypeInput',
    'GenerateHelpCenterArticleInput' => 'Plain\\Generated\\GenerateHelpCenterArticleInput',
    'DeleteCompanyInput' => 'Plain\\Generated\\DeleteCompanyInput',
    'HelpCenterIndexItemInput' => 'Plain\\Generated\\HelpCenterIndexItemInput',
    'UpdateHelpCenterIndexInput' => 'Plain\\Generated\\UpdateHelpCenterIndexInput',
    'UpdateHelpCenterCustomDomainNameInput' => 'Plain\\Generated\\UpdateHelpCenterCustomDomainNameInput',
    'VerifyHelpCenterCustomDomainNameInput' => 'Plain\\Generated\\VerifyHelpCenterCustomDomainNameInput',
    'OptionalGeneratedReplyFeedbackInput' => 'Plain\\Generated\\OptionalGeneratedReplyFeedbackInput',
    'AddGeneratedReplyInput' => 'Plain\\Generated\\AddGeneratedReplyInput',
    'GeneratedReplyFeedbackInput' => 'Plain\\Generated\\GeneratedReplyFeedbackInput',
    'UpdateGeneratedReplyInput' => 'Plain\\Generated\\UpdateGeneratedReplyInput',
    'CreateIndexedDocumentInput' => 'Plain\\Generated\\CreateIndexedDocumentInput',
    'IndexedDocumentsFilter' => 'Plain\\Generated\\IndexedDocumentsFilter',
    'CreateKnowledgeSourceInput' => 'Plain\\Generated\\CreateKnowledgeSourceInput',
    'DeleteKnowledgeSourceInput' => 'Plain\\Generated\\DeleteKnowledgeSourceInput',
    'KnowledgeSourcesFilter' => 'Plain\\Generated\\KnowledgeSourcesFilter',
    'SearchKnowledgeSourcesOptions' => 'Plain\\Generated\\SearchKnowledgeSourcesOptions',
    'ThreadDiscussionSlackDetailsInput' => 'Plain\\Generated\\ThreadDiscussionSlackDetailsInput',
    'ThreadDiscussionEmailDetailsInput' => 'Plain\\Generated\\ThreadDiscussionEmailDetailsInput',
    'ThreadDiscussionCursorDetailsInput' => 'Plain\\Generated\\ThreadDiscussionCursorDetailsInput',
    'CreateThreadDiscussionInput' => 'Plain\\Generated\\CreateThreadDiscussionInput',
    'SendThreadDiscussionMessageInput' => 'Plain\\Generated\\SendThreadDiscussionMessageInput',
    'MarkThreadDiscussionAsResolvedInput' => 'Plain\\Generated\\MarkThreadDiscussionAsResolvedInput',
    'UpdateCompanyTierInput' => 'Plain\\Generated\\UpdateCompanyTierInput',
    'ChangeThreadCustomerInput' => 'Plain\\Generated\\ChangeThreadCustomerInput',
    'UpdateTenantTierInput' => 'Plain\\Generated\\UpdateTenantTierInput',
    'AddMembersToTierInput' => 'Plain\\Generated\\AddMembersToTierInput',
    'RemoveMembersFromTierInput' => 'Plain\\Generated\\RemoveMembersFromTierInput',
    'CreateTierInput' => 'Plain\\Generated\\CreateTierInput',
    'ServiceLevelAgreementThreadLabelTypeIdFilterInput' => 'Plain\\Generated\\ServiceLevelAgreementThreadLabelTypeIdFilterInput',
    'ServiceLevelAgreementInput' => 'Plain\\Generated\\ServiceLevelAgreementInput',
    'BreachActionInput' => 'Plain\\Generated\\BreachActionInput',
    'BeforeBreachActionInput' => 'Plain\\Generated\\BeforeBreachActionInput',
    'TierMemberIdentifierInput' => 'Plain\\Generated\\TierMemberIdentifierInput',
    'UpdateTierInput' => 'Plain\\Generated\\UpdateTierInput',
    'DeleteTierInput' => 'Plain\\Generated\\DeleteTierInput',
    'CreateServiceLevelAgreementInput' => 'Plain\\Generated\\CreateServiceLevelAgreementInput',
    'IntArrayInput' => 'Plain\\Generated\\IntArrayInput',
    'UpdateServiceLevelAgreementInput' => 'Plain\\Generated\\UpdateServiceLevelAgreementInput',
    'DeleteServiceLevelAgreementInput' => 'Plain\\Generated\\DeleteServiceLevelAgreementInput',
    'UpsertCompanyInput' => 'Plain\\Generated\\UpsertCompanyInput',
    'TenantFieldSchemasFilter' => 'Plain\\Generated\\TenantFieldSchemasFilter',
    'TenantFieldSchemaInput' => 'Plain\\Generated\\TenantFieldSchemaInput',
    'UpsertTenantFieldSchemaInput' => 'Plain\\Generated\\UpsertTenantFieldSchemaInput',
    'TenantFieldIdentifier' => 'Plain\\Generated\\TenantFieldIdentifier',
    'UpsertTenantFieldInput' => 'Plain\\Generated\\UpsertTenantFieldInput',
    'DeleteTenantFieldInput' => 'Plain\\Generated\\DeleteTenantFieldInput',
    'DeleteTenantFieldSchemaInput' => 'Plain\\Generated\\DeleteTenantFieldSchemaInput',
    'SetupTenantFieldSchemaMappingInput' => 'Plain\\Generated\\SetupTenantFieldSchemaMappingInput',
    'RemoveTenantFieldSchemaMappingInput' => 'Plain\\Generated\\RemoveTenantFieldSchemaMappingInput',
    'TenantIdentifierInput' => 'Plain\\Generated\\TenantIdentifierInput',
    'UpsertTenantInput' => 'Plain\\Generated\\UpsertTenantInput',
    'DeleteTenantInput' => 'Plain\\Generated\\DeleteTenantInput',
    'CompanyIdentifierInput' => 'Plain\\Generated\\CompanyIdentifierInput',
    'UpdateCustomerCompanyInput' => 'Plain\\Generated\\UpdateCustomerCompanyInput',
    'MentionInput' => 'Plain\\Generated\\MentionInput',
    'SendMSTeamsMessageInput' => 'Plain\\Generated\\SendMSTeamsMessageInput',
    'SendSlackMessageInput' => 'Plain\\Generated\\SendSlackMessageInput',
    'ShareThreadToUserInSlackInput' => 'Plain\\Generated\\ShareThreadToUserInSlackInput',
    'SendDiscordMessageInput' => 'Plain\\Generated\\SendDiscordMessageInput',
    'ToggleSlackMessageReactionInput' => 'Plain\\Generated\\ToggleSlackMessageReactionInput',
    'ForkThreadInput' => 'Plain\\Generated\\ForkThreadInput',
    'CustomerImpersonationInput' => 'Plain\\Generated\\CustomerImpersonationInput',
    'ImpersonationInput' => 'Plain\\Generated\\ImpersonationInput',
    'ReplyToThreadEmailChannelSpecificOptionsInput' => 'Plain\\Generated\\ReplyToThreadEmailChannelSpecificOptionsInput',
    'ReplyToThreadChannelSpecificOptionsInput' => 'Plain\\Generated\\ReplyToThreadChannelSpecificOptionsInput',
    'ReplyToThreadInput' => 'Plain\\Generated\\ReplyToThreadInput',
    'ThreadsSearchQuery' => 'Plain\\Generated\\ThreadsSearchQuery',
    'UpsertMyEmailSignatureInput' => 'Plain\\Generated\\UpsertMyEmailSignatureInput',
    'MarkThreadAsDoneInput' => 'Plain\\Generated\\MarkThreadAsDoneInput',
    'MarkThreadAsTodoInput' => 'Plain\\Generated\\MarkThreadAsTodoInput',
    'ChangeThreadPriorityInput' => 'Plain\\Generated\\ChangeThreadPriorityInput',
    'UpdateThreadTitleInput' => 'Plain\\Generated\\UpdateThreadTitleInput',
    'SnoozeThreadInput' => 'Plain\\Generated\\SnoozeThreadInput',
    'AssignThreadInput' => 'Plain\\Generated\\AssignThreadInput',
    'UnassignThreadInput' => 'Plain\\Generated\\UnassignThreadInput',
    'AddAdditionalAssigneesInput' => 'Plain\\Generated\\AddAdditionalAssigneesInput',
    'RemoveAdditionalAssigneesInput' => 'Plain\\Generated\\RemoveAdditionalAssigneesInput',
    'CreateThreadChannelAssociationInput' => 'Plain\\Generated\\CreateThreadChannelAssociationInput',
    'DeleteThreadChannelAssociationInput' => 'Plain\\Generated\\DeleteThreadChannelAssociationInput',
    'SlackThreadChannelDetailsInput' => 'Plain\\Generated\\SlackThreadChannelDetailsInput',
    'MSTeamsThreadChannelDetailsInput' => 'Plain\\Generated\\MSTeamsThreadChannelDetailsInput',
    'ThreadChannelDetailsInput' => 'Plain\\Generated\\ThreadChannelDetailsInput',
    'ThreadTimelineEntriesFilter' => 'Plain\\Generated\\ThreadTimelineEntriesFilter',
    'CustomerIdentifierInput' => 'Plain\\Generated\\CustomerIdentifierInput',
    'CreateThreadAssignedToInput' => 'Plain\\Generated\\CreateThreadAssignedToInput',
    'CreateThreadInput' => 'Plain\\Generated\\CreateThreadInput',
    'MarkCustomerAsSpamInput' => 'Plain\\Generated\\MarkCustomerAsSpamInput',
    'UnmarkCustomerAsSpamInput' => 'Plain\\Generated\\UnmarkCustomerAsSpamInput',
    'WebhookTargetEventSubscriptionInput' => 'Plain\\Generated\\WebhookTargetEventSubscriptionInput',
    'CreateWebhookTargetInput' => 'Plain\\Generated\\CreateWebhookTargetInput',
    'UpdateWebhookTargetInput' => 'Plain\\Generated\\UpdateWebhookTargetInput',
    'DeleteWebhookTargetInput' => 'Plain\\Generated\\DeleteWebhookTargetInput',
    'CustomerCardConfigOrderInput' => 'Plain\\Generated\\CustomerCardConfigOrderInput',
    'ReorderCustomerCardConfigsInput' => 'Plain\\Generated\\ReorderCustomerCardConfigsInput',
    'CustomerCardConfigApiHeaderInput' => 'Plain\\Generated\\CustomerCardConfigApiHeaderInput',
    'CreateCustomerCardConfigInput' => 'Plain\\Generated\\CreateCustomerCardConfigInput',
    'UpdateCustomerCardConfigInput' => 'Plain\\Generated\\UpdateCustomerCardConfigInput',
    'DeleteCustomerCardConfigInput' => 'Plain\\Generated\\DeleteCustomerCardConfigInput',
    'ReloadCustomerCardInstanceInput' => 'Plain\\Generated\\ReloadCustomerCardInstanceInput',
    'SettingScopeInput' => 'Plain\\Generated\\SettingScopeInput',
    'SettingValueInput' => 'Plain\\Generated\\SettingValueInput',
    'UpdateSettingInput' => 'Plain\\Generated\\UpdateSettingInput',
    'CreateMySlackIntegrationInput' => 'Plain\\Generated\\CreateMySlackIntegrationInput',
    'CreateUserAuthSlackIntegrationInput' => 'Plain\\Generated\\CreateUserAuthSlackIntegrationInput',
    'CreateWorkspaceSlackIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceSlackIntegrationInput',
    'RefreshWorkspaceSlackChannelIntegrationInput' => 'Plain\\Generated\\RefreshWorkspaceSlackChannelIntegrationInput',
    'DeleteWorkspaceSlackIntegrationInput' => 'Plain\\Generated\\DeleteWorkspaceSlackIntegrationInput',
    'CreateWorkspaceSlackChannelIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceSlackChannelIntegrationInput',
    'DeleteWorkspaceSlackChannelIntegrationInput' => 'Plain\\Generated\\DeleteWorkspaceSlackChannelIntegrationInput',
    'DeleteUserAuthSlackIntegrationInput' => 'Plain\\Generated\\DeleteUserAuthSlackIntegrationInput',
    'BulkJoinSlackChannelsInput' => 'Plain\\Generated\\BulkJoinSlackChannelsInput',
    'UpdateConnectedSlackChannelInput' => 'Plain\\Generated\\UpdateConnectedSlackChannelInput',
    'ConnectedSlackChannelsFilter' => 'Plain\\Generated\\ConnectedSlackChannelsFilter',
    'CreateWorkspaceDiscordChannelIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceDiscordChannelIntegrationInput',
    'CreateWorkspaceDiscordIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceDiscordIntegrationInput',
    'DeleteWorkspaceDiscordIntegrationInput' => 'Plain\\Generated\\DeleteWorkspaceDiscordIntegrationInput',
    'DeleteWorkspaceDiscordChannelIntegrationInput' => 'Plain\\Generated\\DeleteWorkspaceDiscordChannelIntegrationInput',
    'DeleteUserAuthDiscordChannelIntegrationInput' => 'Plain\\Generated\\DeleteUserAuthDiscordChannelIntegrationInput',
    'RefreshConnectedDiscordChannelsInput' => 'Plain\\Generated\\RefreshConnectedDiscordChannelsInput',
    'UpdateConnectedDiscordChannelInput' => 'Plain\\Generated\\UpdateConnectedDiscordChannelInput',
    'CreateUserAuthDiscordChannelIntegrationInput' => 'Plain\\Generated\\CreateUserAuthDiscordChannelIntegrationInput',
    'CreateMyLinearIntegrationInput' => 'Plain\\Generated\\CreateMyLinearIntegrationInput',
    'CreateGithubUserAuthIntegrationInput' => 'Plain\\Generated\\CreateGithubUserAuthIntegrationInput',
    'CreateWorkspaceCursorIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceCursorIntegrationInput',
    'CreateMyMSTeamsIntegrationInput' => 'Plain\\Generated\\CreateMyMSTeamsIntegrationInput',
    'CreateWorkspaceMSTeamsIntegrationInput' => 'Plain\\Generated\\CreateWorkspaceMSTeamsIntegrationInput',
    'DeleteWorkspaceMSTeamsIntegrationInput' => 'Plain\\Generated\\DeleteWorkspaceMSTeamsIntegrationInput',
    'CustomerChangesFilter' => 'Plain\\Generated\\CustomerChangesFilter',
    'UpsertCustomerGroupInput' => 'Plain\\Generated\\UpsertCustomerGroupInput',
    'CreateCustomerGroupInput' => 'Plain\\Generated\\CreateCustomerGroupInput',
    'UpdateCustomerGroupInput' => 'Plain\\Generated\\UpdateCustomerGroupInput',
    'DeleteCustomerGroupInput' => 'Plain\\Generated\\DeleteCustomerGroupInput',
    'CustomerGroupIdentifier' => 'Plain\\Generated\\CustomerGroupIdentifier',
    'AddCustomerToCustomerGroupsInput' => 'Plain\\Generated\\AddCustomerToCustomerGroupsInput',
    'RemoveCustomerFromCustomerGroupsInput' => 'Plain\\Generated\\RemoveCustomerFromCustomerGroupsInput',
    'CompaniesSearchQuery' => 'Plain\\Generated\\CompaniesSearchQuery',
    'TenantsSearchQuery' => 'Plain\\Generated\\TenantsSearchQuery',
    'StartServiceAuthorizationInput' => 'Plain\\Generated\\StartServiceAuthorizationInput',
    'ServiceAuthorizationsFilter' => 'Plain\\Generated\\ServiceAuthorizationsFilter',
    'CompleteJiraAuthorizationInput' => 'Plain\\Generated\\CompleteJiraAuthorizationInput',
    'CompleteServiceAuthorizationInput' => 'Plain\\Generated\\CompleteServiceAuthorizationInput',
    'DeleteServiceAuthorizationInput' => 'Plain\\Generated\\DeleteServiceAuthorizationInput',
    'DeleteMyServiceAuthorizationInput' => 'Plain\\Generated\\DeleteMyServiceAuthorizationInput',
    'BusinessHoursWeekDayInput' => 'Plain\\Generated\\BusinessHoursWeekDayInput',
    'BusinessHoursWeekDaysInput' => 'Plain\\Generated\\BusinessHoursWeekDaysInput',
    'UpsertBusinessHoursInput' => 'Plain\\Generated\\UpsertBusinessHoursInput',
    'BusinessHoursSlotInput' => 'Plain\\Generated\\BusinessHoursSlotInput',
    'SyncBusinessHoursSlotsInput' => 'Plain\\Generated\\SyncBusinessHoursSlotsInput',
    'UpdateThreadTenantInput' => 'Plain\\Generated\\UpdateThreadTenantInput',
    'UpdateThreadTierInput' => 'Plain\\Generated\\UpdateThreadTierInput',
    'UpdateThreadEscalationPathInput' => 'Plain\\Generated\\UpdateThreadEscalationPathInput',
    'AddCustomerToTenantsInput' => 'Plain\\Generated\\AddCustomerToTenantsInput',
    'RemoveCustomerFromTenantsInput' => 'Plain\\Generated\\RemoveCustomerFromTenantsInput',
    'SetCustomerTenantsInput' => 'Plain\\Generated\\SetCustomerTenantsInput',
    'CompaniesFilter' => 'Plain\\Generated\\CompaniesFilter',
    'TenantsFilter' => 'Plain\\Generated\\TenantsFilter',
    'CreateCheckoutSessionInput' => 'Plain\\Generated\\CreateCheckoutSessionInput',
    'CalculateRoleChangeCostInput' => 'Plain\\Generated\\CalculateRoleChangeCostInput',
    'AddUserToActiveBillingRotaInput' => 'Plain\\Generated\\AddUserToActiveBillingRotaInput',
    'RemoveUserFromActiveBillingRotaInput' => 'Plain\\Generated\\RemoveUserFromActiveBillingRotaInput',
    'UpdateActiveBillingRotaInput' => 'Plain\\Generated\\UpdateActiveBillingRotaInput',
    'MachineUsersFilter' => 'Plain\\Generated\\MachineUsersFilter',
    'ChangeBillingPlanInput' => 'Plain\\Generated\\ChangeBillingPlanInput',
    'PreviewBillingPlanChangeInput' => 'Plain\\Generated\\PreviewBillingPlanChangeInput',
    'CreateWorkspaceFileUploadUrlInput' => 'Plain\\Generated\\CreateWorkspaceFileUploadUrlInput',
    'DeleteWorkspaceFileInput' => 'Plain\\Generated\\DeleteWorkspaceFileInput',
    'ResolveCustomerForMSTeamsChannelInput' => 'Plain\\Generated\\ResolveCustomerForMSTeamsChannelInput',
    'ResolveCustomerForSlackChannelInput' => 'Plain\\Generated\\ResolveCustomerForSlackChannelInput',
    'HelpCenterThemedImageInput' => 'Plain\\Generated\\HelpCenterThemedImageInput',
    'CreateHelpCenterInput' => 'Plain\\Generated\\CreateHelpCenterInput',
    'HelpCenterPortalSettingsInput' => 'Plain\\Generated\\HelpCenterPortalSettingsInput',
    'HelpCenterAccessSettingsInput' => 'Plain\\Generated\\HelpCenterAccessSettingsInput',
    'HelpCenterPortalSettingsThreadVisibilityInput' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadVisibilityInput',
    'HelpCenterPortalSettingsFormFieldInput' => 'Plain\\Generated\\HelpCenterPortalSettingsFormFieldInput',
    'ThreadAssigneeInput' => 'Plain\\Generated\\ThreadAssigneeInput',
    'HelpCenterPortalSettingsThreadDetailsInput' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadDetailsInput',
    'HelpCenterPortalSettingsThreadFieldsInput' => 'Plain\\Generated\\HelpCenterPortalSettingsThreadFieldsInput',
    'HelpCenterPortalSettingsDropdownOptionInput' => 'Plain\\Generated\\HelpCenterPortalSettingsDropdownOptionInput',
    'UpdateHelpCenterInput' => 'Plain\\Generated\\UpdateHelpCenterInput',
    'HelpCenterAuthMechanismInput' => 'Plain\\Generated\\HelpCenterAuthMechanismInput',
    'HelpCenterWorkosAuthkitAuthMechanismInput' => 'Plain\\Generated\\HelpCenterWorkosAuthkitAuthMechanismInput',
    'WorkosConnectAuthMechanismInput' => 'Plain\\Generated\\WorkosConnectAuthMechanismInput',
    'UpsertHelpCenterArticleInput' => 'Plain\\Generated\\UpsertHelpCenterArticleInput',
    'CreateHelpCenterArticleGroupInput' => 'Plain\\Generated\\CreateHelpCenterArticleGroupInput',
    'UpdateHelpCenterArticleGroupInput' => 'Plain\\Generated\\UpdateHelpCenterArticleGroupInput',
    'DeleteHelpCenterInput' => 'Plain\\Generated\\DeleteHelpCenterInput',
    'DeleteHelpCenterArticleInput' => 'Plain\\Generated\\DeleteHelpCenterArticleInput',
    'DeleteHelpCenterArticleGroupInput' => 'Plain\\Generated\\DeleteHelpCenterArticleGroupInput',
    'CreateIssueTrackerIssueInput' => 'Plain\\Generated\\CreateIssueTrackerIssueInput',
    'IssueTrackerFieldInput' => 'Plain\\Generated\\IssueTrackerFieldInput',
  ),
  'enumsMapping' => 
  array (
    'UserStatus' => 'Plain\\Generated\\UserStatus',
    'LabelTypeType' => 'Plain\\Generated\\LabelTypeType',
    'CustomerStatus' => 'Plain\\Generated\\CustomerStatus',
    'ThreadFieldSchemaType' => 'Plain\\Generated\\ThreadFieldSchemaType',
    'ThreadsLayout' => 'Plain\\Generated\\ThreadsLayout',
    'ThreadsGroupBy' => 'Plain\\Generated\\ThreadsGroupBy',
    'SortDirection' => 'Plain\\Generated\\SortDirection',
    'CustomersSortField' => 'Plain\\Generated\\CustomersSortField',
    'EmailAuthenticity' => 'Plain\\Generated\\EmailAuthenticity',
    'EmailSendStatus' => 'Plain\\Generated\\EmailSendStatus',
    'ComponentTextSize' => 'Plain\\Generated\\ComponentTextSize',
    'ComponentTextColor' => 'Plain\\Generated\\ComponentTextColor',
    'ComponentPlainTextSize' => 'Plain\\Generated\\ComponentPlainTextSize',
    'ComponentPlainTextColor' => 'Plain\\Generated\\ComponentPlainTextColor',
    'ComponentBadgeColor' => 'Plain\\Generated\\ComponentBadgeColor',
    'ComponentSpacerSize' => 'Plain\\Generated\\ComponentSpacerSize',
    'ComponentDividerSpacingSize' => 'Plain\\Generated\\ComponentDividerSpacingSize',
    'MSTeamsChannelMemberRole' => 'Plain\\Generated\\MSTeamsChannelMemberRole',
    'SettingScopeType' => 'Plain\\Generated\\SettingScopeType',
    'IssueTrackerFieldType' => 'Plain\\Generated\\IssueTrackerFieldType',
    'MetricDimensionType' => 'Plain\\Generated\\MetricDimensionType',
    'TimeSeriesMetricDimensionType' => 'Plain\\Generated\\TimeSeriesMetricDimensionType',
    'TimeSeriesMetricIntervalUnit' => 'Plain\\Generated\\TimeSeriesMetricIntervalUnit',
    'SentimentType' => 'Plain\\Generated\\SentimentType',
    'ServiceLevelAgreementType' => 'Plain\\Generated\\ServiceLevelAgreementType',
    'ThreadsSortField' => 'Plain\\Generated\\ThreadsSortField',
    'MutationErrorType' => 'Plain\\Generated\\MutationErrorType',
    'MutationFieldErrorType' => 'Plain\\Generated\\MutationFieldErrorType',
    'RoleScopeResourceType' => 'Plain\\Generated\\RoleScopeResourceType',
    'ThreadScopePrimitiveType' => 'Plain\\Generated\\ThreadScopePrimitiveType',
    'RoleScopeAccessMode' => 'Plain\\Generated\\RoleScopeAccessMode',
    'EscalationPathStepType' => 'Plain\\Generated\\EscalationPathStepType',
    'ThreadLinkStatus' => 'Plain\\Generated\\ThreadLinkStatus',
    'LinearIssueStateType' => 'Plain\\Generated\\LinearIssueStateType',
    'EmailCategory' => 'Plain\\Generated\\EmailCategory',
    'AttachmentVirusScanResult' => 'Plain\\Generated\\AttachmentVirusScanResult',
    'AttachmentType' => 'Plain\\Generated\\AttachmentType',
    'UpsertResult' => 'Plain\\Generated\\UpsertResult',
    'AutoresponderMessageSource' => 'Plain\\Generated\\AutoresponderMessageSource',
    'GeneratedReplyFeedbackType' => 'Plain\\Generated\\GeneratedReplyFeedbackType',
    'KnowledgeSourceType' => 'Plain\\Generated\\KnowledgeSourceType',
    'ThreadDiscussionType' => 'Plain\\Generated\\ThreadDiscussionType',
    'TenantSource' => 'Plain\\Generated\\TenantSource',
    'TenantFieldType' => 'Plain\\Generated\\TenantFieldType',
    'TenantFieldMappingConcept' => 'Plain\\Generated\\TenantFieldMappingConcept',
    'DoneStatusDetail' => 'Plain\\Generated\\DoneStatusDetail',
    'StatusDetailType' => 'Plain\\Generated\\StatusDetailType',
    'TodoStatusDetail' => 'Plain\\Generated\\TodoStatusDetail',
    'SnoozeStatusDetail' => 'Plain\\Generated\\SnoozeStatusDetail',
    'ThreadStatus' => 'Plain\\Generated\\ThreadStatus',
    'AgentStatus' => 'Plain\\Generated\\AgentStatus',
    'MessageSource' => 'Plain\\Generated\\MessageSource',
    'ThreadChannel' => 'Plain\\Generated\\ThreadChannel',
    'ServiceLevelAgreementStatus' => 'Plain\\Generated\\ServiceLevelAgreementStatus',
    'ConnectedSlackChannelType' => 'Plain\\Generated\\ConnectedSlackChannelType',
    'ChangeType' => 'Plain\\Generated\\ChangeType',
    'ServiceAuthorizationStatus' => 'Plain\\Generated\\ServiceAuthorizationStatus',
    'WeekDay' => 'Plain\\Generated\\WeekDay',
    'BillingSubscriptionStatus' => 'Plain\\Generated\\BillingSubscriptionStatus',
    'BillingPlanKey' => 'Plain\\Generated\\BillingPlanKey',
    'BillingSeatType' => 'Plain\\Generated\\BillingSeatType',
    'BillingInterval' => 'Plain\\Generated\\BillingInterval',
    'BillingIntervalUnit' => 'Plain\\Generated\\BillingIntervalUnit',
    'CurrencyCode' => 'Plain\\Generated\\CurrencyCode',
    'FeatureKey' => 'Plain\\Generated\\FeatureKey',
    'RoleKey' => 'Plain\\Generated\\RoleKey',
    'MachineUserType' => 'Plain\\Generated\\MachineUserType',
    'WorkspaceFileVisibility' => 'Plain\\Generated\\WorkspaceFileVisibility',
    'HelpCenterArticleStatus' => 'Plain\\Generated\\HelpCenterArticleStatus',
    'HelpCenterType' => 'Plain\\Generated\\HelpCenterType',
    'HelpCenterAuthMechanismType' => 'Plain\\Generated\\HelpCenterAuthMechanismType',
    'HelpCenterIndexItemType' => 'Plain\\Generated\\HelpCenterIndexItemType',
    'HelpCenterPortalSettingsFormFieldType' => 'Plain\\Generated\\HelpCenterPortalSettingsFormFieldType',
  ),
);
